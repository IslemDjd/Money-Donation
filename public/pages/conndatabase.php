<?php


$connfig = new mysqli("localhost","root","","money_donation");

if(!$connfig)
{
    echo "Connection failed";
    
}