<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
    <xsl:output method="html" doctype-public="XSLT-compat" omit-xml-declaration="yes"
        encoding="UTF-8" indent="yes" />
    <xsl:template match="/">
        <html>
            <body>
                <xsl:apply-templates/>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="libro">
        <p><xsl:value-of select="titulo"/></p>
        <p><xsl:value-of select="autor"/></p>
        <br/>
    </xsl:template>
    <xsl:template match="revista">
        <p><xsl:value-of select="titulo"/></p>
        <p><xsl:value-of select="director"/></p>
        <br/>
    </xsl:template>

</xsl:stylesheet>