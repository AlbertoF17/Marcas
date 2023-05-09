<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" indent="yes"/>
  
  <xsl:template match="/">
    <html>
      <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
      </head>
      <body>
        <main id="container">
          <h1>Consejo Jedi</h1>
          <div id="cardContainer">
            <xsl:apply-templates/>
          </div>
        </main>
      </body>
    </html>
  </xsl:template>
  
  <xsl:template match="jedi">
    <div id="card">
      <xsl:attribute name="id">
        <xsl:value-of select="nombre/@apellido"/>
      </xsl:attribute>
      
      <xsl:attribute name="class">
        <xsl:value-of select="concat('card ', rango)"/>
      </xsl:attribute>
      <xsl:apply-templates select="nombre"/>
      <xsl:apply-templates select="rango"/>
      <ul>
        <li><xsl:apply-templates select="img"/></li>
        <li><xsl:apply-templates select="sableLaser"/></li>
        <li><xsl:apply-templates select="especie"/></li>
        <li><xsl:apply-templates select="fallecimiento"/></li>
      </ul>
    </div>
  </xsl:template>
  
  <xsl:template match="nombre">
    <h2>
      <xsl:value-of select="."/>
      <xsl:if test="@apellido">
        <xsl:text> </xsl:text>
        <xsl:value-of select="@apellido"/>
      </xsl:if>
    </h2>
  </xsl:template>
  
  <xsl:template match="rango">
    <h3>
      <xsl:value-of select="."/> Jedi
    </h3>
  </xsl:template>
  
  <xsl:template match="sableLaser">
    <p>
      Color del sable: <xsl:value-of select="@color"/>
    </p>
  </xsl:template>

  <xsl:template match="especie">
    <p>    
      <xsl:value-of select="."/>
      <xsl:text>: </xsl:text>
      <xsl:value-of select="@genero"/>
    </p>
  </xsl:template>
  
  <xsl:template match="fallecimiento">
    <p>
      Fallecimiento en <xsl:value-of select="concat(@lugar, ' (',. , ')')"/>
    </p>
  </xsl:template>
  
  <xsl:template match="img">
    <img>
        <xsl:attribute name="src">
            <xsl:value-of select="@src"/>
        </xsl:attribute>
        </img>
  </xsl:template>
</xsl:stylesheet>