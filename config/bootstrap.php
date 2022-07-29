<?php


define("PROJECT_ROOT_PATH", __DIR__ . "/../");

require_once PROJECT_ROOT_PATH . "/json_generator/I_JsonGenerator.php";
require_once PROJECT_ROOT_PATH . "/json_generator/JsonGenerator.php";

require_once PROJECT_ROOT_PATH . "/json_struct/FileStruct.php";
require_once PROJECT_ROOT_PATH . "/json_struct/FolderStruct.php";
require_once PROJECT_ROOT_PATH . "/json_struct/ParentStruct.php";


require_once PROJECT_ROOT_PATH . "/sorter/I_Sorter.php";
require_once PROJECT_ROOT_PATH . "/sorter/Sorter.php";
require_once PROJECT_ROOT_PATH . "/sorter/AlphaSorter.php";
require_once PROJECT_ROOT_PATH . "/sorter/NumericSorter.php";


require_once PROJECT_ROOT_PATH . "ScanResults.php";