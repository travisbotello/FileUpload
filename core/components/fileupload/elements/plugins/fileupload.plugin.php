<?php
/**
 *  Copyright 2015 by Bob Ray
 *
 * fileupload plugin
 *
 * FileUpload is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FileUpload is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileUpload; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package fileupload
 *
 */

/* Connected to OnFileManagerUpload Event */

if (! isset($fromfileupload)) {
    /* Event not fired by FileUpload snippet */
    return '';

}

/** @var  $path string */

$directory = $path;

foreach($files as $file) {
    $name = $file['name'];
    $type = $file['type'];
    $extension = $file['extension'];
    $size = $file['size'];
    $tmp_name = $file['tmp_name'];
    $error = $file['error'];

    /* Your code here. Since $file is an associative array, you can have a Tpl chunk with
     * placeholders and use $output .= $modx->getChunk('MyChunk', $file);
     */

    if ($error == 0) {
        /* Success */
    } else {
        /* Failure -- $error contains the error message */
    }
}

return '';