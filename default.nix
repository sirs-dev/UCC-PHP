# default.nix (Para tu entorno local o general)
{ pkgs ? import <nixpkgs> {} }:

pkgs.mkShell {
  buildInputs = [
    pkgs.php82
    pkgs.php82Packages.composer
    pkgs.nodejs_20
    pkgs.unixODBC # ODBC driver, necesario para SQL Server
    pkgs.php # PHP completo que incluye pecl
    pkgs.autoconf # Necesario para compilar extensiones
  ];

  shellHook = ''
    echo "Entorno de desarrollo listo"
  '';
}