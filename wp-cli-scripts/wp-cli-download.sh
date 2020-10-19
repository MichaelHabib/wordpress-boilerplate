#. ./install-and-setup-wp-cli.sh

WPPHAR="./wp-cli.phar"
WP="./wp"

if [ -f "$WP" ]; then
  echo "$WP was found."
else
  if [ -f "$WPPHAR" ]; then
    echo "$WPPHAR was found."
    mv wp-cli.phar wp
  else
    echo "$WPPHAR was NOT found, downloading it now ..."
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    mv wp-cli.phar wp
  fi
fi

chmod u+x $WP
$WP cli update
