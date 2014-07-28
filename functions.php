 <?php

add_theme_support( 'post-thumbnails' );  
add_filter('show_admin_bar', '__return_false');
add_action('wp_logout', 'clean_session');

add_filter( 'excerpt_length', 'custom_excerpt_length', 999);
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('edit_post_link', 'custom_edit_post_link');
add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );

function your_custom_form_class_attr( $class ) {
  $class .= ' contacto';
  return $class;
}

function custom_excerpt_length( $length ) {
  return 40;
}

function catch_that_image() {
	global $post, $posts;
  	$first_img = '';
  	ob_start();
  	ob_end_clean();
  	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  	$first_img = $matches [1] [0];

  	if(empty($first_img)){ //Defines a default image
		$first_img = "img/default.jpg";
  	}
  	return $first_img;
}


function the_excerpt_max_charlength($charlength) {
  $excerpt = get_the_excerpt();
  $charlength++;

  if ( mb_strlen( $excerpt ) > $charlength ) {
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
      echo mb_substr( $subex, 0, $excut );
    } else {
      echo $subex;
    }
    echo '[...]';
  } else {
    echo $excerpt;
  }
}    

function the_excerpt_of_text_max_charlength($charlength,$excerpt) {
  $charlength++;
  if ( mb_strlen( $excerpt ) > $charlength ) {
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
      echo mb_substr( $subex, 0, $excut );
    } else {
      echo $subex;
    }
    echo '[...]';
  } else {
    echo $excerpt;
  }
}

function the_breadcrumb() {
  global $post;
  echo '<ul id="breadcrumb">';
  if (!is_home()) {
    echo '<li><a href="';
    echo get_option('home');
    echo '">';
    echo '<i class="icn icn-hogar icn-md"></i></a></li>';
    if (is_category() || is_single()) {
        if (has_category()) {
          echo '<li>'; the_category(' </li> <li>  '); 
        }
        if (is_single()) {
            if( get_post_type() == 'event' ) {
              echo '<li><a href="';
              echo get_permalink( get_page_by_title( 'Events' ) ); 
              echo '">Eventos</a></li>';
            }
        }
    } elseif (is_page()) {
      if($post->post_parent){
        $anc = get_post_ancestors( $post->ID );
        $title = get_the_title();
        foreach ( $anc as $ancestor ) {
          $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
        }
        echo $output;
      }
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}

function clean_session() {
  $_SESSION['cas_username'] = "";
  $_SESSION['cas_name'] = "";
  $_SESSION['cas_lastname'] = "";
  $_SESSION['cas_admin'] = "";
  $_SESSION['cas_wikipage'] = "";
  $_SESSION['cas_mail'] = "";
}


function get_user_extra_attributes() {
  if ( is_user_logged_in() ) { 
    if (empty($_SESSION['cas_name'])){
      if (phpCAS::checkAuthentication()){
        $json = file_get_contents('http://personas.ead.pucv.cl/api/data4wp?u='.phpCAS::getUser().'&key=d0c0e3d43f100c138b2142fd48eaac32');
        $obj = json_decode($json,true);
        $_SESSION['cas_id'] = $obj["usuario"]["id"];
        $_SESSION['cas_username'] = phpCAS::getUser();
        $_SESSION['cas_name'] = $obj["usuario"]["nombre"];
        $_SESSION['cas_lastname'] = $obj["usuario"]["apellido"];
        $_SESSION['cas_admin'] = $obj["usuario"]["admin"];
        $_SESSION['cas_wikipage'] = $obj["usuario"]["wikipage"];
        $_SESSION['cas_mail'] = $obj["usuario"]["mail"];          
      }
    }
  }
}

function new_excerpt_more( $more ) {
  return "  [...]";
}

function custom_edit_post_link($output) {
    $output = str_replace('class="post-edit-link"', 'class="btn btn-md ver-todo botones-post gris-oscuro"', $output);
    return $output;
}


?>