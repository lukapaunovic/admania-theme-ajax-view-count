# admania-theme-ajax-view-count
As Admania theme lacked AJAX View Count feature when caching is enabled, I developed it because many of my clients are using it and they need caching because of high traffic.

# Instructions

1. Place the footer.php content before the ```</body>``` tag in ```/wp-content/themes/admania/footer.php```
2. Place ajax-view-count.php in ```/wp-content/themes/admania/```
3. Done, your admania view count now works with caching!

Optional: If you want to display loader instead of cached views before new views show up replace

```
<?php echo admania_get_post_views($post->ID); ?>
```

in ```/wp-content/themes/admania/lib/includes/admania-customtemp-tags.php```
with 

```
<img src="/wp-content/themes/admania/load.gif" style="margin-top: 5px;">
```


