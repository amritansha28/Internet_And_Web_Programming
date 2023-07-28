<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="background-color: yellow;text-align:center;font-style:italic;margin-top:100px">
<h1>MOVIES</h1>
<xsl:for-each select="movies/moviename">
<p style="font-size:30px;">Movie Title: <B><xsl:value-of select="title"/></B></p>
<div>Movie Genre: <xsl:value-of select="genre"/></div>
<div>Movie Releasedate: <xsl:value-of select="releasedate"/></div>
<div>Movie Releaseyear: <xsl:value-of select="releaseyear"/></div>
<div>Movie Language: <xsl:value-of select="language"/></div>
</xsl:for-each>
</body>
</html>