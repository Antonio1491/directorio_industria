const { series, src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require("dart-sass"));

//función que compila sass
function compilarSASS(){

  return src("./src/scss/**/*.scss")
  //* = La carpeta actual
  //** = Todos los archivos con es extensión
  .pipe(sass())
  .pipe(dest("./css"));
}

function minificarcss(){

  return src("./src/scss/app.scss")
  .pipe(sass({
    outputStyle:"compressed"
  }))
  .pipe(dest("./css"));
}

function watchArchivos(){
  watch("./src/scss/**/*.scss", compilarSASS)
}
exports.compilarSASS = compilarSASS;
exports.minificarcss = minificarcss;
exports.watchArchivos = watchArchivos;
