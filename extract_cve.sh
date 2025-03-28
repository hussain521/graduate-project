#!/bin/bash

# Define input and output files
input_file="allreport.txt"
output_file="simple_chat_ai/cve_numbers.txt"

# Extract CVE numbers and save to output file
grep -oP 'CVE-\d{4}-\d{4,}' "$input_file" | sort -u > "$output_file"
cd simple_chat_ai
head -n 10 cve_numbers.txt > cve_numbers1.txt
echo "CVE numbers have been extracted to $output_file"
