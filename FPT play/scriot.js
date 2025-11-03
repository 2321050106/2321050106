let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Việt Nam",
    poster: "FPT play/img/mua-do2-1122.jpeg",
    thoiLuong: "120 phút",
  },
];

let phimHientai = danhSachPhim[0];

let banner = document.getElementsByClassName("banner")[0];

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id === idPhim) {
      banner.computedStyleMap.backgroundImage = danhSachPhim[i].poster;
    }
  }
}
