cd Modules/Advertisement
dir=$(basename "$(pwd)")
find app -type f -name "*.php" | xargs sed -i "s/namespace App/namespace App\\\Modules\\\+${dir}\\\app/g"
find app -type f -name "*.php" | xargs sed -i "s/namespace Tests/namespace App\\\Modules\\\+${dir}\\\test/g"
find app -type f -name "*.php" | xargs sed -i "s/namespace Database/namespace App\\\Modules\\\+${dir}\\\database/g"
find app -type f -name "*.php" | xargs sed -i "s/+${dir}/${dir}/g"
