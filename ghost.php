<?php

$output = exec("gs -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=uploaded_files/final.pdf uploaded_files/a.pdf uploaded_files/b.pdf");
////////$comando ="sudo.exe gswin32 '-q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=final.pdf a.pdf b.pdf'";

echo $output."ola";