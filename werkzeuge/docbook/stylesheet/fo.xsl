<?xml version="1.0" encoding="iso-8859-1"?>

<!-- $Id$ -->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:import href="../xsl/fo/profile-docbook.xsl" />
<xsl:import href="common.xsl" />

<!-- page sided layout                                                       -->
<!-- 0: single-sided-layout (page numbers are centered)                      -->
<!-- 1: double-sided layout (page numbers alternate at left and right)       -->
<xsl:param name="double.sided">1</xsl:param>


<xsl:param name="generate.toc">
appendix  nop
article   toc,title
book      toc,title,figure,table,example,equation
chapter   nop
part      nop
preface   nop
qandadiv  nop
qandaset  nop
reference nop
sect1     nop
sect2     nop
sect3     nop
sect4     nop
sect5     nop
section   nop
set       nop
</xsl:param>

</xsl:stylesheet>
