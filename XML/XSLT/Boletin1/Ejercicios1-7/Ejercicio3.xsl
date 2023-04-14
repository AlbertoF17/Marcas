<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
    <xsl:output method="html" doctype-public="XSLT-compat" omit-xml-declaration="yes" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
    <xsl:apply-templates/>
  </xsl:template>

  <xsl:template match="libros/libro">
    <p><xsl:value-of select="autor"/></p>
  </xsl:template>

  <xsl:template match="revistas/revista">
    <p><xsl:value-of select="director"/></p>
  </xsl:template>

</xsl:stylesheet>