<div class="container mt-3">
<div class="row mb-3">
<nav class="navbar navbar-dark" style="background-color: #4a4c94;">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Tambah Mahasiswa</span>
                </div>
            </nav>
<form method="post" action="<?=BASEURL?>/Table_Mhs">
    <div class="mb-1">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" value="" >
    </div>
    <div class="mb-1">
        <label for="nama" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama" id="nama" value="" >
    </div>
    <div class="mb-1">
        <label for="alamat" class="form-label">Alamat Mahasiswa</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="" >
    </div>
    <div class="mb-1">
        <label for="jurusan" class="form-label">Jurusan Mahasiswa</label>
        <!-- <input type="text" class="form-control" name="jurusan" id="jurusan" value="" > -->
        <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
            <option value="Matematika">Matematika</option>
            <option value="Biologi">Biologi</option>
            <option value="Kimia">Kimia</option>
            <option value="Fisika">Fisika</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Arsitektur">Teknik Areistektur</option>
        </select>
    </div>
    <div id="user-list-detail">

    </div>
    <button type="submit" class="btn btn-primary mt-3" name="input_btn" id="input_btn" onclick="addToStorage()">Submit</button>

    <br><br>
    <button type="submit" class="btn btn-primary mt-3" onclick='addToStorage()'>Lihat Data Mahasiswa</button>

</form>
</div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script>


    // document.getElementById("input_btn").addEventListener("click", function(event){
    // event.preventDefault()
    // });

    function checkForStorage() {
    return typeof (Storage) !== 'undefined';
  }

    function addToStorage(){
        var existingEntries = JSON.parse(localStorage.getItem("allEntries"));
        if(existingEntries == null) existingEntries = [];
        var nim = document.getElementById('nim').value;
        var nama = document.getElementById('nama').value;
        var alamat = document.getElementById('alamat').value;
        var jurusan = document.getElementById('jurusan').value;
        var entry = {
                "nim" : nim,
                "nama" : nama,
                "alamat" : alamat,
                "jurusan" : jurusan,
        };
        localStorage.setItem("entry", JSON.stringify(entry));
        // Save allEntries back to local storage
        existingEntries.push(entry);
        localStorage.setItem("allEntries", JSON.stringify(existingEntries));
        renderMhsList();
    }

    function getMhsList() {
        if (checkForStorage()) {
        return JSON.parse(localStorage.getItem("allEntries")) || [];
        } else {
        return [];
        }
    }

    function renderMhsList() {
        const userData = getMhsList();
        const mhsList = document.querySelector('#user-list-detail');
        
        var arrayFromStroage = JSON.parse(localStorage.getItem("allEntries"));
        var arrayLength = arrayFromStroage.length;
        console.log(arrayLength);
        mhsList.innerHTML = '';
    
        // anyak data
        for (var i = 0; i < 1; i++) {
        let row = document.createElement('input');
        row.setAttribute('name', 'dataLength')
        row.setAttribute('type', 'hidden');
        row.value = arrayLength;

        mhsList.appendChild(row);
        }

        for (var i = 0; i < arrayLength; i++) {
        let row = document.createElement('input');
        row.setAttribute('name', 'nama'.concat(i))
        row.setAttribute('type', 'hidden');
        row.value = userData[i].nama;

        mhsList.appendChild(row);
        }

        for (var i = 0; i < arrayLength; i++) {
        let row = document.createElement('input');
        row.setAttribute('name', 'nim'.concat(i))
        row.setAttribute('type', 'hidden');
        row.value = userData[i].nim;

        mhsList.appendChild(row);
        }

        for (var i = 0; i < arrayLength; i++) {
        let row = document.createElement('input');
        row.setAttribute('name', 'alamat'.concat(i))
        row.setAttribute('type', 'hidden');
        row.value = userData[i].alamat;

        mhsList.appendChild(row);
        }

        for (var i = 0; i < arrayLength; i++) {
        let row = document.createElement('input');
        row.setAttribute('name', 'jurusan'.concat(i))
        row.setAttribute('type', 'hidden');
        row.value = userData[i].jurusan;

        mhsList.appendChild(row);
        }
    }
</script>

