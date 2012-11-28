<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dcgqqjhfkugsvc host=ec2-107-22-168-220.compute-1.amazonaws.com port=5432 user=umcvabalfiwehs password=9K08LaWTfzzygvWNqjmDb05gn1 sslmode=require";
}
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
$result = pg_query($db, "SELECT statement goes here");
?>
