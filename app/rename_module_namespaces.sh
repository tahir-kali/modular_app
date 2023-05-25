cd Modules
dir=$(basename "$(pwd)")
grep -rl "Codeholic" * | xargs sed -i "s/Codeholic\\\Advertisement/App\\\Modules\\\+${dir}\\\src/g"
find app -type f -name "*.php" | xargs sed -i "s/+${dir}/${dir}/g"
