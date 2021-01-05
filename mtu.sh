clear
echo -e "\e[1;91mPlease Turn on your Hotspot\e[0m"
read any
clear
echo -e "\n\e[1;94mATTENDANCE FOR DATA STRUCTURE\e[0m"
echo -e "\e[1;92m---------------------------------\e[0m"
date > ~/Atten_Data_Struct/Attendance.txt
echo "" >> ~/Atten_Data_Struct/Attendance.txt
echo -e  "Attendance for Data Structure\n\n" >> ~/Atten_Data_Struct/Attendance.txt
cd ~
cd Atten_Data_Struct
bash Go.sh
