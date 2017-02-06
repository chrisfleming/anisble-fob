<?php
/**
 * Template Name: Archive Index
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php
get_header();
?>
<div class="mobile-menu">
<div class="parents-mobile-menu">
<?php
dropdown_menu(array(
		    'dropdown_title' => '-- Main Menu --','menu' => 'Mobile Navigation', 'depth' => '1'));
?>
</div>
<div class="siblings-mobile-menu">
<?php
dropdown_menu(array(
		    'menu' => 'Archive Sidebar', 'depth' => '0'));
?>
</div>
</div>
<?php
// Get the page number, or assume 1 if not
  if (isset($_GET['arch_page'])) {
    $arch_page = (int)$_GET['arch_page'];
  } else {
    $arch_page = 1;
  }

$curPage = $arch_page;

// Figure out next and previous page numbers
  if ($arch_page == 1) {
    $prevPage = $arch_page;
  } else {
    $prevPage = $arch_page-1;
  }
  $nextPage = $arch_page+1;

// Convert $_GET into ?a=b&c=d... (etc)
  $query_string = http_build_query($_GET);
$shows = json_decode(file_get_contents("https://www.bedlamtheatre.co.uk/archives/shows.json?page={$arch_page}&" . $query_string));

// Remove page from $_GET so we can set it to next/prev if needed
  unset($_GET['arch_page']);

foreach ($http_response_header as $value) {

    if (preg_match('/^x-total-count:/i', $value)) {
        // Successful match
        $totalshows = str_replace("x-total-count: ","",$value);

        // break out of the loop - this is the header we are looking for.
        break;
    }
  }

$lastPage = ceil($totalshows / 5);

?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

<div class="arch-header">
<div id="archive-index" class="template-header">
<h1>Archive</h1>
</div>
</div>
<div class="entry-content">
  <p>The archive contains a list of shows which have been performed by the EUTC and DramSoc over the years. If you feel any information may be incorrect or you have anything to add please email <a href="mailto:archive@friendsofbedlam.co.uk">archive@friendsofbedlam.co.uk</a>. The archive is currently being updated meaning that some of the older shows might be missing some information, so please bear with us, it'll all be up to date soon. Check out the <a title="Gallery" href="<?php print "http://" . $_SERVER['HTTP_HOST'] ?>/gallery/">gallery</a> if you just want to look at pictures and reminisce the good times.</p>

<p>If you have photos, videos or anything else then you can send them to us <a title="Submit Photos and Videos" href="<?php print "http://" . $_SERVER['HTTP_HOST'] ?>/media-upload/">here</a>.</p>

<p>If you have a story you'd like to send us then you can do that <a title="Submit A Story" href="<?php print "http://" . $_SERVER['HTTP_HOST'] ?>/submit-story/">here</a>.</p>
</div>

<div id="container-archsearch">
<span class="collapseomatic colomat-close" title="Search Form" id="archsearch" >Search</span>
<span id="swap-archsearch" style="display: none;">Minimise Search</span>
<div id="target-archsearch" class="collapseomatic_content">
          <form action="/archive" class="show_search" id="show_search" method="get"><div style="margin:0;padding:0;display:inline"></div>
            <div class="control-group string optional q_name_cont"><label class="string optional control-label" for="q_name_cont">Show Title</label><div class="controls"><input class="string optional" id="q_name_cont" name="q[name_cont]" size="50" type="text"></div></div>

            <div class="control-group string optional q_users_full_name_cont"><label class="string optional control-label" for="q_users_full_name_cont">Person Name</label><div class="controls"><input class="string optional" id="q_users_full_name_cont" name="q[users_full_name_cont]" "size="50" type="text"></div></div>

            <div class="control-group date optional q_start_date_gt"><label class="date optional control-label" for="q_start_date_gt_1i">Start Date</label><div class="controls"><select class="date optional" id="q_start_date_gt_1i" name="q[start_date_gt(1i)]">
<option value=""></option>
<?php
  for ($search_year=1915; $search_year<=date("Y"); $search_year++) { ?>
<option value="<?php echo $search_year ?>"><?php echo $search_year ?></option>
  <?php } ?>

</select>
<select class="date optional" id="q_start_date_gt_2i" name="q[start_date_gt(2i)]">
<option value=""></option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select class="date optional" id="q_start_date_gt_3i" name="q[start_date_gt(3i)]">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div></div>
            <div class="control-group date optional q_end_date_lt"><label class="date optional control-label" for="q_end_date_lt_1i">End Date</label><div class="controls"><select class="date optional" id="q_end_date_lt_1i" name="q[end_date_lt(1i)]">
<option value=""></option>
<?php
  for ($search_year=1915; $search_year<=date("Y"); $search_year++) { ?>
<option value="<?php echo $search_year ?>"><?php echo $search_year ?></option>
  <?php } ?>
</select>
<select class="date optional" id="q_end_date_lt_2i" name="q[end_date_lt(2i)]">
<option value=""></option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select class="date optional" id="q_end_date_lt_3i" name="q[end_date_lt(3i)]">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div></div>

            <input class="btn" name="commit" type="submit" value="Search">
</form>
</div>
</div>

  <?php
    foreach($shows as $show) {
  ?>
<sec class="media">
<?php echo "<a href='/show?slug={$show->slug}' class='pull-left thumbnail'"?>><img alt="2" class="media-object" src="http://bedlamtheatre.co.uk/<?php echo $show->thumb_image ?>"></a>

<div class="media-body">
<header class="media-heading">
          <h3 class="media-heading"><?php echo "<a href='/show?slug={$show->slug}'>{$show->name}</a>" ?></h3>
</header>
        <p>
          <?php echo $show->tagline ?>
          <br>
<em>
          <span class="show-date">
<?php $start_date = $show->start_date; ?>
	<?php echo date('l d F Y', strtotime($start_date)); ?>
<?php print " - " ?>
<?php $end_date = $show->end_date; ?>
	<?php echo date('l d F Y', strtotime($end_date)); ?></span>
</em>
        </p>
<br>
        <p><?php echo "<a href='/show?slug={$show->slug}'>View Details</a>" ?></p>
      </div>
</sec>
<hr class="sec">
  <?php
    }
  ?>

  <?php
if ($totalshows != 0) {
  ?>

<div align="center">
<table class="arch-pagination">
<tr>
<td rowspan="2">
<?php
  echo "$totalshows shows found";
?>
</td>
</tr>
</table>
</div>

<div align="center">
<span class="arch-pagination">
<a>
<?php
  echo "<a href='archive?{$query_string}&arch_page=1'>First</a>";
?>
</a>

<?php
  print "|";
if ($curPage==1) {
  print "Previous";
} else {
echo "<a href='archive?{$query_string}&arch_page={$prevPage}'>Previous</a>";
}
?>


<?php
if ($curPage>10 & $curPage<=$lastPage-10) {
  $elipsesPrev = $curPage-10;
?>
 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$elipsesPrev}'>...</a>" ?></a>
<?php
    } elseif ($curPage>10) {
  $elipsesPrev = $lastPage-19;
?>
 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$elipsesPrev}'>...</a>" ?></a>
<?php
    }
?>

<?php
if ($lastPage < 10) {
for ($cell = 1; $cell <= $lastPage; $cell++) {

  $navPage = $curPage + $cell-1;
  if ($cell == $curPage) {
?>
      |<?php print $cell; ?>
				       <?php } else { ?>

 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$cell}'>{$cell}</a>" ?></a>

<?php
      }
}
  } elseif ($curPage>10 & $curPage <= $lastPage-10) {
for ($cell = 1; $cell <= 10; $cell++) {

  $navPage = $curPage + $cell-1;
  if ($navPage == $curPage) {
?>
      |<?php print $navPage; ?>
				       <?php } else { ?>

 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$navPage}'>{$navPage}</a>" ?></a>

<?php
      }
}
  } else if ($curPage > $lastPage-10) {
for ($cell2 = $lastPage-9; $cell2 <= $lastPage; $cell2++) {

  if ($cell2 == $curPage) {
?>
      |<?php print $cell2; ?>
				       <?php } else { ?>

 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$cell2}'>{$cell2}</a>" ?></a>

<?php
      }
}
  } else {

for ($cell3 = 1; $cell3 <= 10; $cell3++) {

  if ($cell3 == $curPage) {
?>
      |<?php print $cell3; ?>
				       <?php } else { ?>

 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$cell3}'>{$cell3}</a>" ?></a>

<?php
      }
}
  }
?>

<?php
if ($curPage<=$lastPage-10 & $curPage>10) {
  $elipsesNext = $curPage+10;
?>
 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$elipsesNext}'>...</a>" ?></a>
<?php
    } elseif ($curPage<=$lastPage-10) {
  $elipsesNext = 11;
?>
 <a>|<?php echo "<a href='archive?{$query_string}&arch_page={$elipsesNext}'>...</a>" ?></a>
<?php
    }
?>



<?php
  print "|";
if ($curPage==$lastPage) {
  print "Next";
} else {
  echo "<a href='archive?{$query_string}&arch_page={$nextPage}'>Next</a>";
}
?>

<a>
<?php
  print "|";
  echo "<a href='archive?{$query_string}&arch_page={$lastPage}'>Last</a>";
?>
</a>
</span>
</div>
<br>
  <?php
    } else {
echo nl2br("\n\nYour search returned no results, please try again.");
  }
  ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
