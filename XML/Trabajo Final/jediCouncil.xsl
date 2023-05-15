<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" indent="yes" />

  <xsl:template match="/">
    <html>
      <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
      </head>
      <body>
        <main id="container">
          <h1>Jedi Council</h1>
          <div id="cardContainer">
            <xsl:apply-templates />
          </div>
        </main>
        <script type="text/javascript" src="js/app.js"></script>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="consejoJedi">
    <xsl:for-each select="jedi">
      <div id="{nombre/@apellido}" class="card {rango}">
        <img>
          <xsl:attribute name="src">
            <xsl:value-of select="img/@src" />
          </xsl:attribute>
          <xsl:attribute name="alt">
            <xsl:value-of select="concat(nombre, '_', nombre/@apellido)"/>
          </xsl:attribute>
        </img>
        <h2><xsl:value-of select="nombre"/><xsl:text> </xsl:text><xsl:value-of select="nombre/@apellido"/></h2>
        <h3><xsl:value-of select="rango"/><xsl:text> Jedi</xsl:text></h3>
        <ul>
          <li>Color del sable: <xsl:value-of select="sableLaser/@color" /></li>
          <li><xsl:value-of select="especie" />: <xsl:value-of select="especie/@genero" /></li>
          <li>Fallecimiento en <xsl:value-of select="concat(fallecimiento/@lugar, ' (', fallecimiento, ')')" /></li>
        </ul>
      </div>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>