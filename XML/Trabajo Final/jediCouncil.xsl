<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" indent="yes" />

  <xsl:template match="/">
    <html>
      <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
      </head>
      <body>
        <main id="container">
          <h1>Consejo Jedi</h1>
          <div id="cardContainer">
            <xsl:apply-templates />
          </div>
        </main>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="consejoJedi">
    <xsl:for-each select="jedi">
      <div id="{nombre/@apellido}" class="card {rango}">
        <h2><xsl:value-of select="nombre"/><xsl:text> </xsl:text><xsl:value-of select="nombre/@apellido"/></h2>
        <h3><xsl:value-of select="rango"/><xsl:text> Jedi</xsl:text></h3>
        <ul>
          <li>
            <img>
              <xsl:attribute name="src">
                <xsl:value-of select="img/@src" />
              </xsl:attribute>
              <xsl:attribute name="alt">
                <xsl:value-of select="concat(nombre, '_', nombre/@apellido)"/>
              </xsl:attribute>
            </img>
          </li>
          <li><p>Color del sable: <xsl:value-of select="sableLaser/@color" /></p></li>
          <li><p><xsl:value-of select="especie" />: <xsl:value-of select="especie/@genero" /></p></li>
          <li><p>Fallecimiento en <xsl:value-of select="concat(fallecimiento/@lugar, ' (', fallecimiento, ')')" /></p></li>
        </ul>
      </div>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>