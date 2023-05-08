<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
            <head>
                <style>
          /* Estilos CSS para la apariencia de la carta */
          .card {
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 10px;
          }
          .card img {
            width: 100%;
            max-width: 200px;
            height: auto;
          }
          .card h2 {
            margin-top: 0;
          }
          .card p {
            margin: 0;
          }
                </style>
            </head>
            <body>
                <xsl:apply-templates/>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="jedi">
        <div class="card">
            <xsl:apply-templates select="nombre"/>
            <xsl:apply-templates select="especie"/>
            <xsl:apply-templates select="rango"/>
            <xsl:apply-templates select="sableLaser"/>
            <xsl:apply-templates select="fallecimiento"/>
            <xsl:apply-templates select="img"/>
        </div>
    </xsl:template>

    <xsl:template match="nombre">
        <h2>
            <xsl:value-of select="."/>
            <xsl:if test="@apellido">
                <xsl:text></xsl:text>
                <xsl:value-of select="@apellido"/>
            </xsl:if>
        </h2>
    </xsl:template>

    <xsl:template match="especie">
        <p>
            <xsl:value-of select="@genero"/>
            <xsl:text></xsl:text>
            <xsl:value-of select="."/>
        </p>
    </xsl:template>

    <xsl:template match="rango">
        <p>
      Rango: <xsl:value-of select="."/>
        </p>
    </xsl:template>

    <xsl:template match="sableLaser">
        <p>
      Sable de luz: <xsl:value-of select="@color"/>
        </p>
    </xsl:template>

    <xsl:template match="fallecimiento">
        <p>
      Fallecimiento: <xsl:value-of select="concat(., ' (', @lugar, ')')"/>
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