# What is the features branch?
The features branch (as the name implies and as you might have read from the master branch readme) is a seperate branch for adding basic features, such as boardlinks. If i feel brave and competent enough, i might add more complex features, such as custom capcodes.

I've tested this branch and it works fine, however i will still add a disclaimer that this might be more unstable than the master branch.

# How to use banners and boardlinks
**Banners**

Static banner: modify line 1273 from *<img src="boardimg.php">* to *<img src="image.png">*. Make sure the image dimensions are 300x100.

Rotating banners: replace all the images in bimg/ with your own banners. The filename does not matter, as the banner script (boardimg.php) pulls a random image from the bimg folder. again, make sure the dimensions are 300x100.

**Boardlinks**

modify line 1265 in futaba.php to link to boards you have created. to make boards, make a new folder with the boardname, put in the 3 php files and then link to the folder. this does require to modify the futaba.php file in every single board to link properly, but it shouldn't be a big hassle if you don't have over 9000 boards.
