<h1>To add a sub module use the following command:</h1>
<code>git submodule add https://github.com/tahir-kali/advertisement.git app/Modules/Advertisement</code>

<h2> To Sync all submodules </h2>
<li><code>git submodule sync </code></li>
<li><code>cd app/Modules/{Module_Name}</code></li>
<li><code>git pull</code></li>

<h2> Remove cached submodules </h2>
<li><code>git rm --cached app/Modules/Advertisement</code></li>
<li><code>git submodule deinit -f app/Modules/Advertisement</code></li>