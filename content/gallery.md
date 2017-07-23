+++
date = "2015-10-17T18:03:08+01:00"
title = "Gallery"
type = "staticpage"
layout = "gallery"

[menu.main]
weight = 3

+++
<h1 style="text-align: center">Photo Gallery</h1>
<p style="text-align: center">Click a photo for a larger version.</p>

{{< load-photoswipe >}}
{{< gallery dir="images/gallery_images" />}}