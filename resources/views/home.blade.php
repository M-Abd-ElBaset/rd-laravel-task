<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="../resources/css/file-input.css" rel="stylesheet">
        <link href="../resources/css/text-input.css" rel="stylesheet">
        <link href="../resources/css/buttons.css" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h2>Open SSL Encryption / Decryption</h2>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Encryption</div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">Decryption</div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <form  action="{{ route('encrypt-file') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="flex items-center file-input">
                                    <input type="file" id="raw_file" name="raw_file" class="file">
                                    <label for="raw_file"> 
                                        Select file
                                    </label>
                                    <p id="raw_file_name" class="file-name"></p>
{{-- 
                                    <input id="dir_selector" type="file" onchange="browseResult(event)" webkitdirectory directory multiple="false" style="display:none" />
                                    <button type="button" onclick="showPathChooser()">browse</button> --}}

                                    <button id="encryptBtn"> 
                                        <p id="encryptBtnText">Encrypt</p>
                                        <div class="check-box">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                                <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                            </svg>
                                        </div>
                                    </button>

                                    {{-- <input type="file" webkitdirectory="true" directory multiple/> --}}
                                </div>

                                
                                <div class="p-6">
                                    <p class="text-center text-sm"> write save location and new file name</p>
                                    <div class="flex items-center">
                                        <input  name="encryption_save_location"  type="text" id="encryption_save_location" placeholder="save location"
                                        style="width: 70%">
                                        <span class="text-lg leading-7 font-semibold"> /</span>
                                        <input  name="encrypted_file_name"  type="text" id="encrypted_file_name" placeholder="file name"
                                        style="width: 30%">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <form action="{{ route('decrypt-file') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="flex items-center file-input">
                                    <input type="file" id="encrypted_file" name="encrypted_file" class="file">
                                    <label for="encrypted_file"> 
                                        Select file
                                    </label>
                                    <p id="encrypted_file_name" class="file-name"></p>
                                    <button id="decryptBtn"> 
                                        <p id="decryptBtnText">Decrypt</p>
                                        <div class="check-box">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                                <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>

                                <div class="p-6">
                                    <p class="text-center text-sm"> write save location and new file name</p>
                                    <div class="flex items-center">
                                        <input  name="decryption_save_location"  type="text" id="decryption_save_location" placeholder="save location"
                                        style="width: 70%">
                                        <span class="text-lg leading-7 font-semibold"> /</span>
                                        <input  name="decrypted_file_name"  type="text" id="decrypted_file_name" placeholder="file name"
                                        style="width: 30%">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-black-500 sm:text-left">
                        <div id="file_details" class="flex items-center">
                            
                        </div>
                    </div>

                    <div class="text-center text-sm text-black-500 sm:text-right">
                        <div id="file_details2" class="flex items-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="file" id="FileUpload" onchange="selectFolder(event)" webkitdirectory mozdirectory msdirectory odirectory directory multiple />

            {{-- scripts --}}
            <script src="../resources/js/file-input.js"></script>
            <script src="../resources/js/buttons.js"></script>

            <script>
                function browseResult(e){
                    var fileselector = document.getElementById('fileselector');
                    console.log(fileselector.value);
                }

                async function showPathChooser(){                
                    const directoryHandle = await window.showDirectoryPicker();
                    // console.log(directoryHandle)
                    // const fileHandle = directoryHandle.getFileHandle();
                    // console.log(fileHandle)
                    // // var pathArr = directoryHandle.resolve(directoryHandle);
                    // // console.log(pathArr);
                    //  for await (const entry of directoryHandle.values()) {
                    //     console.log(entry.kind, entry.name, directoryHandle.resolve(entry));
                    // }
                }

            </script>

            <script type="text/javascript">
                function selectFolder(e) {
                    var folder = e.target.files[0].webkitRelativePath.split("/")[0];
                    console.log(folder)
                }
        </script>
    </body>
</html>
