<?php

namespace Fuel\Tasks;

class Sqs
{
   public static function run()
   {
	 \Config::load('aws');
	 \Logic\Aws_Sqs::receive_sqs_for_multi();
   }	  
}
