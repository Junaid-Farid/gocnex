<?php
/**
 * Template Name: Search Results
 */
session_start();
if ($_GET)
{
    unset($_SESSION['url']);
}
get_header();

$urlstring = '';
if (isset($_GET['propertyType']) && $_GET['propertyType'] != '')
{
    $type = $_GET['propertyType'];
    $urlstring.='&A_Type=' . urlencode($type);
}
if (isset($_GET['rental_type']) && $_GET['rental_type'] != '')
{
    $rental_type = $_GET['rental_type'];
    $urlstring.='&A_Rent=' . urlencode($rental_type);
}

if (isset($_GET['minPrice']) && $_GET['minPrice'] != '')
{
    $pricemin = $_GET['minPrice'];
    $urlstring.='&A_Price_Min=' . urlencode($pricemin);
}
if (isset($_GET['maxPrice']) && $_GET['maxPrice'] != '')
{
    $pricemax = $_GET['maxPrice'];
    $urlstring.='&A_Price_Max=' . urlencode($pricemax);
}
if (isset($_GET['location']) && $_GET['location'] != '')
{
    $location = $_GET['location'];
    $urlstring.='&A_Area_In=' . urlencode($location);
}
if (isset($_GET['minBeds']) && $_GET['minBeds'] != '')
{
    $bedsmin = $_GET['minBeds'];
    $urlstring.='&A_Beds_Min=' . urlencode($bedsmin);
}
if (isset($_GET['maxBeds']) && $_GET['maxBeds'] != '')
{
    $bedsmax = $_GET['maxBeds'];
    $urlstring.='&A_Beds_Max=' . urlencode($bedsmax);
}
if (isset($_GET['minBaths']) && $_GET['minBaths'] != '')
{
    $bathmin = $_GET['minBaths'];
    $urlstring.='&A_Baths_Min=' . urlencode($bathmin);
}
if (isset($_GET['maxBaths']) && $_GET['maxBaths'] != '')
{
    $bathmax = $_GET['maxBaths'];
    $urlstring.='&A_Baths_Max=' . urlencode($bathmax);
}
if (isset($_GET['ref']) && $_GET['ref'] != '')
{
    $refrence = $_GET['ref'];
    $urlstring.='&A_Reference=' . urlencode($refrence);
}

$urlarea = get_site_url() . '/ams2.0/site/propertyareasxml';
$areas = file_get_contents($urlarea);
$areasArr = new SimpleXMLElement($areas);
?>
<script>
    jQuery(document).ready(function ($) {
        $('.jscroll').jscroll({
            //nextSelector: 'a.jscroll-next',
        });
    });
</script>
<div class="listing-search count-4 clearfix clear">
    <form>
        <div class="form-inner">
            <div class="listing-search-details ">
                <div class="listing-search-field listing-search-field-taxonomy listing-search-field-location">
                    <select id="location" class="single" name="location" >
                        <option value = "">Location</option>
                        <?php
                        foreach ($areasArr->Areas->Area as $data)
                        {
                            ?>
                            <option value="<?php echo $data; ?>"><?php echo $data; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="listing-search-field listing-search-field-taxonomy listing-search-field-property-type">
                    <select id="Property_type" class="listing-search-property-type select" name="propertyType">                         
                        <option value="">Type</option>
                        <option value="Villa">Villa</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Plot">Plot</option>
                    </select>
                </div>
                <div class="listing-search-field listing-search-field-select listing-search-field-details_1">
                    <select class="listing-search-details_1 select" name="minBeds">                  
                        <option selected="selected" value="0">Bedrooms</option>
                        <option  value="1">1+</option>
                        <option  value="2">2+</option>
                        <option  value="3">3+</option>
                        <option  value="4">4+</option>
                        <option  value="5">5+</option>
                    </select>
                    <input type="hidden" name="maxBeds" value="100"/>
                </div>
                <div class="listing-search-field listing-search-field-select listing-search-field-details_2">
                    <select class="listing-search-details_2 select" name="minBaths">                       
                        <option selected="selected" value="0">Bathrooms</option>
                        <option  value="1">1+</option>
                        <option  value="2">2+</option>
                        <option  value="3">3+</option>
                        <option  value="4">4+</option>
                        <option  value="5">5+</option>
                    </select>
                    <input type="hidden" name="maxBaths" value="100"/>
                </div>

            </div>
            <div class="listing-search-main">
                <div class="listing-search-field listing-search-field-select listing-search-field-details_2">
                    <select name="minPrice" id="PRICE_MIN"> 
                        <option value="100000" selected="selected">€100,000</option>
                        <option value="200000">€200,000</option>
                        <option value="250000">€250,000</option>
                        <option value="300000">€300,000</option>
                        <option value="350000">€350,000</option>
                        <option value="400000">€400,000</option>
                        <option value="450000">€450,000</option>
                        <option value="500000">€500,000</option>
                        <option value="600000">€600,000</option>
                        <option value="700000">€700,000</option>
                        <option value="800000">€800,000</option>
                        <option value="900000">€900,000</option>
                        <option value="1000000">€1,000,000</option>
                        <option value="1250000">€1,250,000</option>
                        <option value="1500000">€1,500,000</option>
                        <option value="1750000">€1,750,000</option>
                        <option value="2000000">€2,000,000</option>
                        <option value="2500000">€2,500,000</option>
                        <option value="5000000">€5,000,000</option>
                        <option value="10000000">€10,000,000</option>
                        <option value="15000000">€15,000,000</option>
                        <option value="20000000">€20,000,000</option>
                    </select>
                </div> 
                <div class="listing-search-field listing-search-field-select listing-search-field-details_2">
                    <select name="maxPrice" id="PRICE_MAX">
                        <option value="99999999999999" selected="selected">Max Price</option>
                        <option value="100000">€100,000</option>
                        <option value="200000">€200,000</option>
                        <option value="250000">€250,000</option>
                        <option value="300000">€300,000</option>
                        <option value="350000">€350,000</option>
                        <option value="400000">€400,000</option>
                        <option value="450000">€450,000</option>
                        <option value="500000">€500,000</option>
                        <option value="600000">€600,000</option>
                        <option value="700000">€700,000</option>
                        <option value="800000">€800,000</option>
                        <option value="900000">€900,000</option>
                        <option value="1000000">€1,000,000</option>
                        <option value="1250000">€1,250,000</option>
                        <option value="1500000">€1,500,000</option>
                        <option value="1750000">€1,750,000</option>
                        <option value="2000000">€2,000,000</option>
                        <option value="2500000">€2,500,000</option>
                        <option value="5000000">€5,000,000</option>
                        <option value="10000000">€10,000,000</option>
                        <option value="15000000">€15,000,000</option>
                        <option value="20000000">€20,000,000</option>
                    </select>
                </div> 
                <input class="listing-search-submit btn btn-large btn-primary" type="submit" value="Search" name="search-submit">
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_SESSION["url"]))
    $url = $_SESSION["url"];
else
{
    $url = $_SESSION["url"] = $urlstring;
}
$passurl = get_site_url() . '/ams2.0/site/propertiesxml?A_Page_Size=9&A_Page_No=0' . $url;

$Properies = file_get_contents($passurl);
$xml = new SimpleXMLElement($Properies);
?>
<div class="container clearfix">
    <div class="page-contents-wrap jscroll">
        <div id="post-53" class="post-53 page type-page status-publish hentry">
            <div class="entry-page-wrapper entry-content clearfix">
                <div id="gridblock-container" class="gridblock-three clearfix">
                    <?php
                    $count = 1;
                    foreach ($xml->Property as $property)
                    {
                        if ($count % 3 == 0)
                            $margin = 'search-reult-width nomargin';
                        else
                            $margin = 'search-reult-width';
                        $count++;
                        ?>
                        <div class="gridblock-element gridblock-filterable <?php echo $margin; ?>" data-portfolio="portfolio-42" data-id="id-2">
                            <a  class="gridblock-image-link gridblock-columns" title="" href="<?php echo get_permalink(get_page_by_path('property-detail')); ?>/?pid=<?php echo $property->PropertyID; ?>">
                                <img src="<?php echo $property->MainImage ?>" alt="" class="preload-image displayed-image"/>
                            </a>
                            <div class="work-details property-detail">
                                <h4>
                                    <a href="<?php echo get_permalink(get_page_by_path('property-detail')); ?>/?pid=<?php echo $property->PropertyID; ?>" rel="bookmark" title=" <?php echo $property->PropertyTitle ?>">
                                        <?php echo $property->PropertyTitle ?>
                                    </a>
                                </h4>
                                <div class="entry-content work-description">
                                    <div class="title_left">
                                        <i class="fa fa-money"></i>
                                        <?php
                                        if (isset($_GET['rent']))
                                        {
                                            echo str_replace(',', '.', number_format("$property->RentalPrice")) . " ";
                                        } else
                                        {
                                            echo str_replace(',', '.', number_format("$property->Price")) . " ";
                                        }
                                        echo $property->Currency . "";
                                        ?>
                                    </div>
                                    <div class="right">                                     
                                        <i class="fa fa-bed"></i>
                                        <?php echo $property->Bedrooms; ?>
                                        <img style="width:15px" src="<?php bloginfo('template_url'); ?>/images/Shower_Icon_White.png"/>
                                        <?php echo $property->Bathrooms; ?>
                                    </div>
                                </div>
                                <div style="clear:both"></div>  
                            </div>
                        </div>
                    <?php } ?> 


                </div>
            </div>
        </div>
        <a class="jscroll-next" href="<?php echo get_bloginfo('template_url'); ?>/loadmore.php?page=1&<?php echo urlencode($url); ?>">next page</a>
    </div>
</div>


<?php get_footer(); ?>


