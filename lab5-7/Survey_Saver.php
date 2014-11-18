<?php
	requier_once("include/survey.inc.php")
	$surveyInfo = array
	{

	}


	/*
	 * @return array, assoc array with survey info
	 */
	function getSurveyFromRequest();

	/*
	 * @param array @SurveyInfo
	 */
	function saveSurveyToFile(@surveyInfo);


	//get object from file
	/*
	 * @param string $email
	 * @return array
	 */

	function getSurveyFromFile($email);
?>