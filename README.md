# admania-theme-ajax-view-count
As Admania theme lacks AJAX View Count feature when caching is enabled, I developed it myself. Because many of my clients are using this theme and they need caching because of high traffic.

# Instructions

1. Place the footer.php **content** before the ```</body>``` tag in ```/wp-content/themes/admania/footer.php```
2. Place **ajax-view-count.php** in ```/wp-content/themes/admania/```
3. Done, your admania view count now works with caching!

Optional: If you want to display loader instead of cached views before JS executes, find 

```
<?php echo admania_get_post_views($post->ID); ?>
```

in ```/wp-content/themes/admania/lib/includes/admania-customtemp-tags.php```
and replace with 

```
<img src="/wp-content/themes/admania/loader.gif" style="margin-top: 5px;">
```

and place ``loader.gif`` in ``/wp-content/themes/admania/``


