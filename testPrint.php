<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-24
 * Time: 2:41 PM
 */
?>
<?php
extract($_GET);

function GetPage($URL)
{
    #Get the source content of the URL
    $source = file_get_contents($URL);

    #Extract the raw URl from the current one
    $scheme = parse_url($URL, PHP_URL_SCHEME); //Ex: http
    $host = parse_url($URL, PHP_URL_HOST); //Ex: www.google.com
    $raw_url = $scheme . '://' . $host; //Ex: http://www.google.com

    #Replace the relative link by an absolute one
    $relative = array();
    $absolute = array();

    #String to search
    $relative[0] = '/src="\//';
    $relative[1] = '/href="\//';

    #String to remplace by
    $absolute[0] = 'src="' . $raw_url . '/';
    $absolute[1] = 'href="' . $raw_url . '/';

    $source = preg_replace($relative, $absolute, $source); //Ex: src="/image/google.png" to src="http://www.google.com/image/google.png"

    return $source;
}
/* $exam->acuities_INPUT_0 =   $acuities_INPUT_0;  $exam->acuities_INPUT_1 =   $acuities_INPUT_1;  $exam->acuities_INPUT_2 =   $acuities_INPUT_2 ;$exam->acuities_INPUT_3 =   $acuities_INPUT_3 ;
    $exam->acuities_INPUT_4 =   $acuities_INPUT_4;  $exam->acuities_INPUT_5 =   $acuities_INPUT_5;  $exam->acuities_INPUT_6 =   $acuities_INPUT_6 ;$exam->acuities_INPUT_7 =   $acuities_INPUT_7 ;
    $exam->acuities_INPUT_8 =   $acuities_INPUT_8;  $exam->acuities_INPUT_9 =   $acuities_INPUT_9;  $exam->acuities_INPUT_10 =  $acuities_INPUT_10 ;$exam->acuities_INPUT_11 =  $acuities_INPUT_11 ;
    $exam->acuities_INPUT_12 =  $acuities_INPUT_12; $exam->acuities_INPUT_13 =  $acuities_INPUT_13; $exam->acuities_INPUT_14 =  $acuities_INPUT_14 ;$exam->acuities_INPUT_15 =  $acuities_INPUT_15 ;
    $exam->acuities_INPUT_16 =  $acuities_INPUT_16; $exam->acuities_INPUT_17 =  $acuities_INPUT_17; $exam->acuities_INPUT_18 =  $acuities_INPUT_18 ;$exam->acuities_INPUT_19 =  $acuities_INPUT_19 ;
    $exam->acuities_INPUT_20 =  $acuities_INPUT_20; $exam->acuities_INPUT_21 =  $acuities_INPUT_21; $exam->acuities_INPUT_22 =  $acuities_INPUT_22 ;$exam->acuities_INPUT_23 =  $acuities_INPUT_23 ;
    $exam->acuities_INPUT_24 =  $acuities_INPUT_24; $exam->acuities_INPUT_25 =  $acuities_INPUT_25; $exam->acuities_INPUT_26 =  $acuities_INPUT_26 ;$exam->acuities_INPUT_27 =  $acuities_INPUT_27 ;
    $exam->acuities_INPUT_28 =  $acuities_INPUT_28; $exam->acuities_INPUT_29 =  $acuities_INPUT_29; $exam->acuities_INPUT_30 =  $acuities_INPUT_30 ;$exam->acuities_INPUT_31 =  $acuities_INPUT_31 ;
    $exam->acuities_INPUT_32 =  $acuities_INPUT_32; $exam->acuities_INPUT_33 =  $acuities_INPUT_33; $exam->acuities_INPUT_34 =  $acuities_INPUT_34 ;$exam->acuities_INPUT_35 =  $acuities_INPUT_35 ;
    $exam->acuities_INPUT_36 =  $acuities_INPUT_36; $exam->acuities_SELECT_0 =  $acuities_SELECT_0; $exam->acuities_SELECT_1 =  $acuities_SELECT_1 ;$exam->acuities_SELECT_2 =  $acuities_SELECT_2 ;
    $exam->acuities_SELECT_3 =  $acuities_SELECT_3; $exam->acuities_SELECT_4 =  $acuities_SELECT_4;

    //Save Acuties
    $acuitiesResults =  $exam->saveAcuities();
*/


"CREATE TABLE tbl_exam (
  exam_id INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  patient_id INT(11) NOT NULL COMMENT '',
  location_id INT(11) NOT NULL COMMENT '',
  doctor_id MEDIUMINT(10) NULL COMMENT '',
  INPUT_0 VARCHAR(15) NULL COMMENT '',
  SELECT_0 VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`exam_id`)  COMMENT '');";

"ALTER TABLE `vision_ehr`.`tbl_acuities`
ADD COLUMN `acuities_INPUT_0` VARCHAR(15) NULL COMMENT '' AFTER `exam_id`,
ADD COLUMN `acuities_INPUT_1` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_0`;
";

"ALTER TABLE `vision_ehr`.` tbl_retinoscopy`
ADD COLUMN `retinoscopy_INPUT_0`  VARCHAR(15) NULL COMMENT '' AFTER `exam_id`,
ADD COLUMN `retinoscopy_INPUT_1`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_0`,
ADD COLUMN `retinoscopy_INPUT_2`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_1`,
ADD COLUMN `retinoscopy_INPUT_3`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_2`,
ADD COLUMN `retinoscopy_INPUT_4`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_3`,
ADD COLUMN `retinoscopy_INPUT_5`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_4`,
ADD COLUMN `retinoscopy_INPUT_6`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_5`,
ADD COLUMN `retinoscopy_INPUT_7`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_6`,
ADD COLUMN `retinoscopy_INPUT_8`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_7`,
ADD COLUMN `retinoscopy_INPUT_9`  VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_8`,
ADD COLUMN `retinoscopy_INPUT_10` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_9`,
ADD COLUMN `retinoscopy_INPUT_11` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_10`,
ADD COLUMN `retinoscopy_INPUT_12` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_11`,
ADD COLUMN `retinoscopy_INPUT_13` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_12`,
ADD COLUMN `retinoscopy_INPUT_14` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_13`,
ADD COLUMN `retinoscopy_INPUT_15` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_14`,
ADD COLUMN `retinoscopy_INPUT_16` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_15`,
ADD COLUMN `retinoscopy_INPUT_17` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_16`,
ADD COLUMN `retinoscopy_INPUT_18` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_17`,
ADD COLUMN `retinoscopy_INPUT_19` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_18`,
ADD COLUMN `retinoscopy_INPUT_20` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_19`,
ADD COLUMN `retinoscopy_INPUT_21` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_20`,
ADD COLUMN `retinoscopy_INPUT_22` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_21`,
ADD COLUMN `retinoscopy_INPUT_23` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_22`,
ADD COLUMN `retinoscopy_INPUT_24` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_23`,
ADD COLUMN `retinoscopy_INPUT_25` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_24`,
ADD COLUMN `retinoscopy_INPUT_26` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_25`,
ADD COLUMN `retinoscopy_INPUT_27` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_26`,
ADD COLUMN `retinoscopy_INPUT_28` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_27`,
ADD COLUMN `retinoscopy_INPUT_29` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_28`,
ADD COLUMN `retinoscopy_INPUT_30` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_29`,
ADD COLUMN `retinoscopy_INPUT_31` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_30`,
ADD COLUMN `retinoscopy_INPUT_32` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_31`,
ADD COLUMN `retinoscopy_INPUT_33` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_32`,
ADD COLUMN `retinoscopy_INPUT_34` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_33`,
ADD COLUMN `retinoscopy_INPUT_35` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_34`,
ADD COLUMN `retinoscopy_INPUT_36` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_35`,
ADD COLUMN `retinoscopy_INPUT_37` VARCHAR(15) NULL COMMENT '' AFTER `acuities_INPUT_36`,
ADD COLUMN `retinoscopy_INPUT_38` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_0`,
ADD COLUMN `retinoscopy_INPUT_39` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_1`,
ADD COLUMN `retinoscopy_INPUT_40` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_2`,
ADD COLUMN `retinoscopy_INPUT_41` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_3`,
ADD COLUMN `retinoscopy_INPUT_42` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_3`,
ADD COLUMN `retinoscopy_INPUT_43` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_3`,
ADD COLUMN `retinoscopy_INPUT_44` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_3`,
ADD COLUMN `retinoscopy_INPUT_45` VARCHAR(15) NULL COMMENT '' AFTER `acuities_SELECT_3`
;
";

?>
<div class="tab-content">

    `acuities_INPUT_0` = '$this->acuities_INPUT_0',
    `acuities_INPUT_1` = '$this->acuities_INPUT_1',
    `acuities_INPUT_2` = '$this->acuities_INPUT_2',
    `acuities_INPUT_3` = '$this->acuities_INPUT_3',
    `acuities_INPUT_4` = '$this->acuities_INPUT_4',
    `acuities_INPUT_5` = '$this->acuities_INPUT_5',
    `acuities_INPUT_6` = '$this->acuities_INPUT_6',
    `acuities_INPUT_7` = '$this->acuities_INPUT_7',
    `acuities_INPUT_8` = '$this->acuities_INPUT_8',
    `acuities_INPUT_9` = '$this->acuities_INPUT_9',
    `acuities_INPUT_10` = '$this->acuities_INPUT_10',
    `acuities_INPUT_11` = '$this->acuities_INPUT_11',
    `acuities_INPUT_12` = '$this->acuities_INPUT_12',
    `acuities_INPUT_13` = '$this->acuities_INPUT_13',
    `acuities_INPUT_14` = '$this->acuities_INPUT_14',
    `acuities_INPUT_15` = '$this->acuities_INPUT_15',`acuities_INPUT_1`6` 'this->= ',$this->acuities_INPUT_16',
    `acuities_INPUT_17` = '$this->acuities_INPUT_17',
    `acuities_INPUT_18` = '$this->acuities_INPUT_18',
    `acuities_INPUT_19` = '$this->acuities_INPUT_19',
    `acuities_INPUT_20` = '$this->acuities_INPUT_20',
    `acuities_INPUT_21` = '$this->acuities_INPUT_21',
    `acuities_INPUT_22` = '$this->acuities_INPUT_22',
    `acuities_INPUT_23` = '$this->acuities_INPUT_23',
    `acuities_INPUT_24` = '$this->acuities_INPUT_24',
    `acuities_INPUT_25` = '$this->acuities_INPUT_25',
    `acuities_INPUT_26` = '$this->acuities_INPUT_26',
    `acuities_INPUT_27` = '$this->acuities_INPUT_27',
    `acuities_INPUT_28` = '$this->acuities_INPUT_28',
    `acuities_INPUT_29` = '$this->acuities_INPUT_29',
    `acuities_INPUT_30` = '$this->acuities_INPUT_30',
    `acuities_INPUT_31` = '$this->acuities_INPUT_31',
    `acuities_INPUT_32` = '$this->acuities_INPUT_32',
    `acuities_INPUT_33` = '$this->acuities_INPUT_33',
    `acuities_INPUT_34` = '$this->acuities_INPUT_34',
    `acuities_INPUT_35` = '$this->acuities_INPUT_35',
    `acuities_INPUT_36` = '$this->acuities_INPUT_36',
    `acuities_SELECT_0` = '$this->acuities_SELECT_0',
    `acuities_SELECT_1` = '$this->acuities_SELECT_1',
    `acuities_SELECT_2` = '$this->acuities_SELECT_2',
    `acuities_SELECT_3` = '$this->acuities_SELECT_3',
    `acuities_SELECT_4` = '$this->acuities_SELECT_4',


    `retinoscopy_INPUT_0` = '$this->retinoscopy_INPUT_0',
    `retinoscopy_INPUT_1` = '$this->retinoscopy_INPUT_1',
    `retinoscopy_INPUT_2` = '$this->retinoscopy_INPUT_2',
    `retinoscopy_INPUT_3` = '$this->retinoscopy_INPUT_3',
    `retinoscopy_INPUT_4` = '$this->retinoscopy_INPUT_4',
    `retinoscopy_INPUT_5` = '$this->retinoscopy_INPUT_5',
    `retinoscopy_INPUT_6` = '$this->retinoscopy_INPUT_6',
    `retinoscopy_INPUT_7` = '$this->retinoscopy_INPUT_7',
    `retinoscopy_INPUT_8` = '$this->retinoscopy_INPUT_8',
    `retinoscopy_INPUT_9` = '$this->retinoscopy_INPUT_9',
    `retinoscopy_INPUT_10` = '$this->retinoscopy_INPUT_10',
    `retinoscopy_INPUT_11` = '$this->retinoscopy_INPUT_11',
    `retinoscopy_INPUT_12` = '$this->retinoscopy_INPUT_12',
    `retinoscopy_INPUT_13` = '$this->retinoscopy_INPUT_13',
    `retinoscopy_INPUT_14` = '$this->retinoscopy_INPUT_14',
    `retinoscopy_INPUT_15` = '$this->retinoscopy_INPUT_15',
    `retinoscopy_INPUT_16` = '$this->retinoscopy_INPUT_16',
    `retinoscopy_INPUT_17` = '$this->retinoscopy_INPUT_17',
    `retinoscopy_INPUT_18` = '$this->retinoscopy_INPUT_18',
    `retinoscopy_INPUT_19` = '$this->retinoscopy_INPUT_19',
    `retinoscopy_INPUT_20` = '$this->retinoscopy_INPUT_20',
    `retinoscopy_INPUT_21` = '$this->retinoscopy_INPUT_21',
    `retinoscopy_INPUT_22` = '$this->retinoscopy_INPUT_22',
    `retinoscopy_INPUT_23` = '$this->retinoscopy_INPUT_23',
    `retinoscopy_INPUT_24` = '$this->retinoscopy_INPUT_24',
    `retinoscopy_INPUT_25` = '$this->retinoscopy_INPUT_25',
    `retinoscopy_INPUT_26` = '$this->retinoscopy_INPUT_26',
    `retinoscopy_INPUT_27` = '$this->retinoscopy_INPUT_27',
    `retinoscopy_INPUT_28` = '$this->retinoscopy_INPUT_28',
    `retinoscopy_INPUT_29` = '$this->retinoscopy_INPUT_29',
    `retinoscopy_INPUT_30` = '$this->retinoscopy_INPUT_30',
    `retinoscopy_INPUT_31` = '$this->retinoscopy_INPUT_31',
    `retinoscopy_INPUT_32` = '$this->retinoscopy_INPUT_32',
    `retinoscopy_INPUT_33` = '$this->retinoscopy_INPUT_33',
    `retinoscopy_INPUT_34` = '$this->retinoscopy_INPUT_34',
    `retinoscopy_INPUT_35` = '$this->retinoscopy_INPUT_35',
    `retinoscopy_INPUT_36` = '$this->retinoscopy_INPUT_36',
    `retinoscopy_INPUT_37` = '$this->retinoscopy_INPUT_37',
    `retinoscopy_INPUT_38` = '$this->retinoscopy_INPUT_38',
    `retinoscopy_INPUT_39` = '$this->retinoscopy_INPUT_39',
    `retinoscopy_INPUT_40` = '$this->retinoscopy_INPUT_40',
    `retinoscopy_INPUT_41` = '$this->retinoscopy_INPUT_41',
    `retinoscopy_INPUT_42` = '$this->retinoscopy_INPUT_42',
    `retinoscopy_INPUT_43` = '$this->retinoscopy_INPUT_43',
    `retinoscopy_INPUT_44` = '$this->retinoscopy_INPUT_44',
    `retinoscopy_INPUT_45` = '$this->retinoscopy_INPUT_45',

    `external_INPUT_0` = '$this->external_INPUT_0',
    `external_INPUT_1` = '$this->external_INPUT_1',
    `external_INPUT_2` = '$this->external_INPUT_2',
    `external_INPUT_3` = '$this->external_INPUT_3',
    `external_INPUT_4` = '$this->external_INPUT_4',
    `external_INPUT_5` = '$this->external_INPUT_5',
    `external_INPUT_6` = '$this->external_INPUT_6',
    `external_INPUT_7` = '$this->external_INPUT_7',
    `external_INPUT_8` = '$this->external_INPUT_8',
    `external_INPUT_9` = '$this->external_INPUT_9',
    `external_INPUT_10` = '$this->external_INPUT_10',
    `external_INPUT_11` = '$this->external_INPUT_11',
    `external_INPUT_12` = '$this->external_INPUT_12',
    `external_INPUT_13` = '$this->external_INPUT_13',
    `external_INPUT_14` = '$this->external_INPUT_14',
    `external_INPUT_15` = '$this->external_INPUT_15',
    `external_INPUT_16` = '$this->external_INPUT_16',
    `external_INPUT_17` = '$this->external_INPUT_17',
    `external_INPUT_18` = '$this->external_INPUT_18',
    `external_INPUT_19` = '$this->external_INPUT_19',
    `external_INPUT_20` = '$this->external_INPUT_20',
    `external_INPUT_21` = '$this->external_INPUT_21',
    `external_INPUT_22` = '$this->external_INPUT_22',

    `internal_INPUT_0` = '$this->internal_INPUT_0',
    `internal_INPUT_1` = '$this->internal_INPUT_1',
    `internal_INPUT_2` = '$this->internal_INPUT_2',
    `internal_INPUT_3` = '$this->internal_INPUT_3',
    `internal_INPUT_4` = '$this->internal_INPUT_4',
    `internal_INPUT_5` = '$this->internal_INPUT_5',
    `internal_INPUT_6` = '$this->internal_INPUT_6',
    `internal_INPUT_7` = '$this->internal_INPUT_7',
    `internal_INPUT_8` = '$this->internal_INPUT_8',
    `internal_INPUT_9` = '$this->internal_INPUT_9',
    `internal_INPUT_10` = '$this->internal_INPUT_10',
    `internal_INPUT_11` = '$this->internal_INPUT_11',
    `internal_INPUT_12` = '$this->internal_INPUT_12',
    `internal_INPUT_13` = '$this->internal_INPUT_13',
    `internal_INPUT_14` = '$this->internal_INPUT_14',
    `internal_INPUT_15` = '$this->internal_INPUT_15',
    `internal_INPUT_16` = '$this->internal_INPUT_16',
    `internal_INPUT_17` = '$this->internal_INPUT_17',
    `internal_INPUT_18` = '$this->internal_INPUT_18',
    `internal_INPUT_19` = '$this->internal_INPUT_19',
    `internal_INPUT_20` = '$this->internal_INPUT_20',
    `internal_INPUT_21` = '$this->internal_INPUT_21',
    `internal_INPUT_22` = '$this->internal_INPUT_22',
    `internal_INPUT_23` = '$this->internal_INPUT_23',
    `internal_INPUT_24` = '$this->internal_INPUT_24',
    `internal_INPUT_25` = '$this->internal_INPUT_25',
    `internal_INPUT_26` = '$this->internal_INPUT_26',
    `internal_INPUT_27` = '$this->internal_INPUT_27',
    `internal_INPUT_28` = '$this->internal_INPUT_28',
    `internal_INPUT_29` = '$this->internal_INPUT_29',
    `internal_INPUT_30` = '$this->internal_INPUT_30',
    `internal_INPUT_31` = '$this->internal_INPUT_31',
    `internal_INPUT_32` = '$this->internal_INPUT_32',
    `internal_INPUT_33` = '$this->internal_INPUT_33',
    `internal_INPUT_34` = '$this->internal_INPUT_34',
    `internal_INPUT_35` = '$this->internal_INPUT_35',
    `internal_INPUT_36` = '$this->internal_INPUT_36',
    `internal_INPUT_37` = '$this->internal_INPUT_37',
    `internal_INPUT_38` = '$this->internal_INPUT_38',
    `internal_INPUT_39` = '$this->internal_INPUT_39',
    `internal_INPUT_40` = '$this->internal_INPUT_40',
    `internal_SELECT_0` = '$this->internal_SELECT_0',

    $exam->tonometry_INPUT_0 = $tonometry_INPUT_0;
    $exam->tonometry_INPUT_1 = $tonometry_INPUT_1;
    $exam->tonometry_INPUT_2 = $tonometry_INPUT_2;
    $exam->tonometry_INPUT_3 = $tonometry_INPUT_3;
    $exam->tonometry_INPUT_4 = $tonometry_INPUT_4;
    $exam->tonometry_INPUT_5 = $tonometry_INPUT_5;
    $exam->tonometry_INPUT_6 = $tonometry_INPUT_6;
    $exam->tonometry_INPUT_7 = $tonometry_INPUT_7;
    $exam->tonometry_INPUT_8 = $tonometry_INPUT_8;
    $exam->tonometry_INPUT_9 = $tonometry_INPUT_9;
    $exam->tonometry_INPUT_10 = $tonometry_INPUT_10;
    $exam->tonometry_INPUT_11 = $tonometry_INPUT_11;
    $exam->tonometry_INPUT_12 = $tonometry_INPUT_12;
    $exam->tonometry_INPUT_13 = $tonometry_INPUT_13;
    $exam->tonometry_INPUT_14 = $tonometry_INPUT_14;
    $exam->tonometry_INPUT_15 = $tonometry_INPUT_15;
    $exam->tonometry_INPUT_16 = $tonometry_INPUT_16;
    $exam->tonometry_INPUT_17 = $tonometry_INPUT_17;
    $exam->tonometry_INPUT_18 = $tonometry_INPUT_18;
    $exam->tonometry_INPUT_19 = $tonometry_INPUT_19;
    $exam->tonometry_SELECT_0 = $tonometry_SELECT_0;

     $exam->diagnosis_INPUT_0 = $diagnosis_INPUT_0;
     $exam->diagnosis_INPUT_1 = $diagnosis_INPUT_1;
     $exam->diagnosis_INPUT_2 = $diagnosis_INPUT_2;
     $exam->diagnosis_INPUT_3 = $diagnosis_INPUT_3;
     $exam->diagnosis_INPUT_4 = $diagnosis_INPUT_4;
     $exam->diagnosis_INPUT_5 = $diagnosis_INPUT_5;
     $exam->diagnosis_INPUT_6 = $diagnosis_INPUT_6;
     $exam->diagnosis_INPUT_7 = $diagnosis_INPUT_7;
     $exam->diagnosis_INPUT_8 = $diagnosis_INPUT_8;
     $exam->diagnosis_INPUT_9 = $diagnosis_INPUT_9;
     $exam->diagnosis_INPUT_10 = $diagnosis_INPUT_10;
     $exam->diagnosis_INPUT_11 = $diagnosis_INPUT_11;
     $exam->diagnosis_INPUT_12 = $diagnosis_INPUT_12;
     $exam->diagnosis_INPUT_13 = $diagnosis_INPUT_13;
     $exam->diagnosis_INPUT_14 = $diagnosis_INPUT_14;
     $exam->diagnosis_INPUT_15 = $diagnosis_INPUT_15;
     $exam->diagnosis_INPUT_16 = $diagnosis_INPUT_16;
     $exam->diagnosis_INPUT_17 = $diagnosis_INPUT_17;
     $exam->diagnosis_INPUT_18 = $diagnosis_INPUT_18;
     $exam->diagnosis_INPUT_19 = $diagnosis_INPUT_19;
     $exam->diagnosis_INPUT_20 = $diagnosis_INPUT_20;
     $exam->diagnosis_INPUT_21 = $diagnosis_INPUT_21;
     $exam->diagnosis_INPUT_22 = $diagnosis_INPUT_22;
     $exam->diagnosis_INPUT_23 = $diagnosis_INPUT_23;
     $exam->diagnosis_INPUT_24 = $diagnosis_INPUT_24;
     $exam->diagnosis_INPUT_25 = $diagnosis_INPUT_25;
     $exam->diagnosis_INPUT_26 = $diagnosis_INPUT_26;
     $exam->diagnosis_INPUT_27 = $diagnosis_INPUT_27;
     $exam->diagnosis_INPUT_28 = $diagnosis_INPUT_28;
     $exam->diagnosis_INPUT_29 = $diagnosis_INPUT_29;
     $exam->diagnosis_INPUT_30 = $diagnosis_INPUT_30;
     $exam->diagnosis_INPUT_31 = $diagnosis_INPUT_31;
     $exam->diagnosis_INPUT_32 = $diagnosis_INPUT_32;
     $exam->diagnosis_INPUT_33 = $diagnosis_INPUT_33;
     $exam->diagnosis_INPUT_34 = $diagnosis_INPUT_34;
     $exam->diagnosis_INPUT_35 = $diagnosis_INPUT_35;
     $exam->diagnosis_INPUT_36 = $diagnosis_INPUT_36;
     $exam->diagnosis_INPUT_37 = $diagnosis_INPUT_37;
     $exam->diagnosis_INPUT_38 = $diagnosis_INPUT_38;
     $exam->diagnosis_INPUT_39 = $diagnosis_INPUT_39;
     $exam->diagnosis_INPUT_40 = $diagnosis_INPUT_40;
     $exam->diagnosis_INPUT_41 = $diagnosis_INPUT_41;
     $exam->diagnosis_INPUT_42 = $diagnosis_INPUT_42;
     $exam->diagnosis_INPUT_43 = $diagnosis_INPUT_43;
     $exam->diagnosis_INPUT_44 = $diagnosis_INPUT_44;
     $exam->diagnosis_INPUT_45 = $diagnosis_INPUT_45;
</div>