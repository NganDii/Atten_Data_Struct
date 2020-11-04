clear
echo -e "\e[1;91mPlease Turn on your Hotspot\e[0m"
read any
clear
echo -e "\n\e[1;94mATTENDANCE FOR DATA STRUCTURE\e[0m"
echo -e "\e[1;92m---------------------------------\e[0m"
date > ~/nganu/Attendance.txt
echo "" >> ~/nganu/Attendance.txt
echo -e  "Attendance for Data Structure\n\n" >> ~/nganu/Attendance.txt
cd ~
cd nganu
bash Go.sh
