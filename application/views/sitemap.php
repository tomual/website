<?php header('Content-type: text/xml'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<?php 
$base = array(
    array(
        "loc" => "https://tomual.com/",
        "lastmod" => date("Y-m-d", strtotime("2 weeks ago")),
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/software",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/blog",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/about",
        "lastmod" => "",
        "changefreq" => "weekly",
    )
);

$material = array(
    array(
        "loc" => "https://tomual.com/material/backgrounds",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/bullets",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/emoticons",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/php-blog-walkthrough-with-codeigniter",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/setting-up-a-website-walkthrough",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/unsupported-value-type-error",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/acpi-error-spam",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/zero-disk-space-remaining-linux",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/blog-layouts",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/material/toybox",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
);

$about = array(
    array(
        "loc" => "https://tomual.com/timeline",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/about/bookmarks",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/contact",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/ezine",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/gallery/illustration",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
);

$other = array(
    array(
        "loc" => "https://tomual.com/s/iconshop/",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/korean-mmo-ranking/",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
    array(
        "loc" => "https://tomual.com/timeman/",
        "lastmod" => "",
        "changefreq" => "weekly",
    ),
);

$blog = array(
    array (
        "loc" => "https://tomual.com/blog/view/1",
        "lastmod" => "2017-11-03",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/2",
        "lastmod" => "2017-11-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/3",
        "lastmod" => "2017-10-23",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/4",
        "lastmod" => "2017-09-23",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/5",
        "lastmod" => "2017-09-21",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/6",
        "lastmod" => "2017-09-11",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/7",
        "lastmod" => "2017-09-04",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/8",
        "lastmod" => "2017-08-10",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/9",
        "lastmod" => "2017-07-09",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/10",
        "lastmod" => "2017-07-05",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/11",
        "lastmod" => "2017-06-16",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/12",
        "lastmod" => "2017-05-15",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/13",
        "lastmod" => "2017-05-05",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/14",
        "lastmod" => "2017-04-30",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/15",
        "lastmod" => "2017-04-14",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/16",
        "lastmod" => "2017-03-29",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/17",
        "lastmod" => "2017-03-08",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/18",
        "lastmod" => "2017-03-07",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/19",
        "lastmod" => "2017-01-30",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/20",
        "lastmod" => "2017-01-28",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/21",
        "lastmod" => "2017-01-22",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/22",
        "lastmod" => "2016-12-20",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/23",
        "lastmod" => "2016-11-14",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/24",
        "lastmod" => "2016-11-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/25",
        "lastmod" => "2016-10-26",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/26",
        "lastmod" => "2016-10-01",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/27",
        "lastmod" => "2016-08-21",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/28",
        "lastmod" => "2016-08-21",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/29",
        "lastmod" => "2016-07-07",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/30",
        "lastmod" => "2016-07-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/31",
        "lastmod" => "2016-05-24",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/32",
        "lastmod" => "2016-03-11",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/33",
        "lastmod" => "2016-03-07",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/34",
        "lastmod" => "2016-01-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/35",
        "lastmod" => "2016-01-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/36",
        "lastmod" => "2015-12-06",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/37",
        "lastmod" => "2015-10-03",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/38",
        "lastmod" => "2015-05-31",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/39",
        "lastmod" => "2015-04-06",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/40",
        "lastmod" => "2015-03-26",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/41",
        "lastmod" => "2015-02-27",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/42",
        "lastmod" => "2015-02-18",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/43",
        "lastmod" => "2015-02-03",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/44",
        "lastmod" => "2015-02-01",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/45",
        "lastmod" => "2015-01-04",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/46",
        "lastmod" => "2014-12-14",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/47",
        "lastmod" => "2014-10-22",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/48",
        "lastmod" => "2014-08-26",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/49",
        "lastmod" => "2014-08-18",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/50",
        "lastmod" => "2014-07-10",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/51",
        "lastmod" => "2014-07-08",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/52",
        "lastmod" => "2014-06-25",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/53",
        "lastmod" => "2014-06-10",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/54",
        "lastmod" => "2014-05-17",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/55",
        "lastmod" => "2014-05-12",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/56",
        "lastmod" => "2014-05-07",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/57",
        "lastmod" => "2014-05-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/58",
        "lastmod" => "2014-04-29",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/59",
        "lastmod" => "2014-04-27",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/60",
        "lastmod" => "2014-04-22",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/61",
        "lastmod" => "2014-04-20",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/62",
        "lastmod" => "2014-04-17",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/63",
        "lastmod" => "2014-03-29",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/64",
        "lastmod" => "2014-03-09",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/65",
        "lastmod" => "2014-03-06",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/66",
        "lastmod" => "2014-03-03",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/67",
        "lastmod" => "2014-02-17",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/68",
        "lastmod" => "2014-01-18",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/69",
        "lastmod" => "2014-01-12",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/70",
        "lastmod" => "2013-09-10",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/71",
        "lastmod" => "2013-08-21",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/72",
        "lastmod" => "2013-08-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/73",
        "lastmod" => "2013-08-02",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/74",
        "lastmod" => "2013-08-01",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/75",
        "lastmod" => "2013-07-31",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/76",
        "lastmod" => "2013-07-27",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/77",
        "lastmod" => "2013-07-24",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/78",
        "lastmod" => "2017-11-07",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/79",
        "lastmod" => "2017-11-25",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/80",
        "lastmod" => "2017-12-26",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/87",
        "lastmod" => "2018-06-03",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/81",
        "lastmod" => "2018-01-31",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/82",
        "lastmod" => "2018-02-24",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/83",
        "lastmod" => "2018-03-21",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/84",
        "lastmod" => "2018-04-16",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/85",
        "lastmod" => "2018-04-28",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/86",
        "lastmod" => "2018-05-17",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/88",
        "lastmod" => "2018-06-29",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/89",
        "lastmod" => "2018-07-31",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/90",
        "lastmod" => "2018-09-27",
        "priority" => "0.8"
    ),
    array (
        "loc" => "https://tomual.com/blog/view/91",
        "lastmod" => "2018-10-27",
        "priority" => "0.8"
    ),
);

$urls = array_merge($base, $material, $about, $other, $blog);
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach($urls as $url): ?>
    <url>
        <loc><?php echo $url['loc'] ?></loc>
        <?php if (!empty($url['lastmod'])): ?>
            <lastmod><?php echo $url['lastmod'] ?></lastmod>
        <?php endif ?>
        <?php if (!empty($url['priority'])): ?>
            <priority><?php echo $url['priority'] ?></priority>
        <?php endif ?>
    </url>
    <?php endforeach ?>
</urlset>