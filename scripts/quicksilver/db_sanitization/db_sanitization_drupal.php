<?php
// Don't ever sanitize the database on the live environment. Doing so would
// destroy the canonical version of the data.
if (defined('PANTHEON_ENVIRONMENT') && !in_array(PANTHEON_ENVIRONMENT, ['live', 'test', 'dev'])) {

  // Run the Drush command to sanitize the database.
  echo "Sanitizing the database...\n";
  passthru('drush sql-sanitize -y');
  echo "Database sanitization complete.\n";
}
