<?php

namespace App\Enums;

enum Status: string
{
   case SUCCESS="SUCCESS";

   case FAILURE= "FAILED";

   case CANCELLED= "CANCELLED";

   case PENDING= "PENDING";
}