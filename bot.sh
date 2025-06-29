#!/bin/bash

while (true); do
  read input

  if [ "$input" = "exit" ]; then
    break;
  fi

  echo "  /\\_/\\"
  echo "=( ^.^ )="
  sound=$((1 + RANDOM % 5))
  if [[ $sound -le 2 ]]; then
    echo "meow"
  elif [[ $sound -le 4 ]]; then
    echo "mrrp"
  else
    echo "brrrrp"
  fi
done
