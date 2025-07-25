document.addEventListener("DOMContentLoaded", () => {
  const provinsiSelect = document.getElementById("txtListLokasi");
  const kotaSelect = document.getElementById("txtListKota");

  fetch("https://alamat.thecloudalert.com/api/provinsi/get/")
    .then(res => res.json())
    .then(data => {
      data.result.forEach(p => {
        const option = new Option(p.text, p.id);
        provinsiSelect.add(option);
      });
    });

  provinsiSelect.addEventListener("change", () => {
    kotaSelect.innerHTML = '<option value="">Pilih Kota…</option>'; // reset
    const provId = provinsiSelect.value;

    if (provId) {
      fetch(`https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=${provId}`)
        .then(res => res.json())
        .then(data => {
          data.result.forEach(c => {
            const option = new Option(c.text, c.id);
            kotaSelect.add(option);
          });
        });
    }
  });
});
