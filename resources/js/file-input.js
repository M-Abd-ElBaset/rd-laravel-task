const raw_file = document.querySelector('#raw_file');

raw_file.addEventListener('change', (e) => {
  const [file] = e.target.files; // Get the selected file
  const { name: fileName, size } = file; // Get the file name and size
  const fileSize = (size / 1000).toFixed(2); // Convert size in bytes to kilo bytes
  const fileNameAndSize = `${fileName} - ${fileSize}KB`; // Set the text content
  document.querySelector('#file_details').textContent = fileNameAndSize;
});

const encrypted_file = document.querySelector('#encrypted_file');

encrypted_file.addEventListener('change', (e) => {
  const [file] = e.target.files; // Get the selected file
  const { name: fileName, size } = file; // Get the file name and size
  const fileSize = (size / 1000).toFixed(2); // Convert size in bytes to kilo bytes
  const fileNameAndSize = `${fileName} - ${fileSize}KB`; // Set the text content
  document.querySelector('#file_details2').textContent = fileNameAndSize;
});