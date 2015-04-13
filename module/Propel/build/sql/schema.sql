
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- admision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `admision`;

CREATE TABLE `admision`
(
    `idadmision` INTEGER NOT NULL,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER NOT NULL,
    `idcuarto` INTEGER NOT NULL,
    `admision_fechaadmision` DATETIME NOT NULL,
    `admision_fechasalida` DATETIME,
    `admision_diagnostico` TEXT,
    `admision_observaciones` TEXT,
    `admision_status` enum('pagada','no pagada','pendiente') DEFAULT 'pendiente',
    `admision_total` VARCHAR(45),
    `admision_pagadaen` DATETIME,
    PRIMARY KEY (`idadmision`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idcuarto` (`idcuarto`),
    CONSTRAINT `idcuarto_admision`
        FOREIGN KEY (`idcuarto`)
        REFERENCES `cuarto` (`idcuarto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_admision`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_admision`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- admisionanticipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `admisionanticipo`;

CREATE TABLE `admisionanticipo`
(
    `idadmisionanticipo` INTEGER NOT NULL AUTO_INCREMENT,
    `idadmision` INTEGER NOT NULL,
    `admisionanticipo_fecha` DATETIME NOT NULL,
    `admisionanticipo_cantidad` DECIMAL(10,2) NOT NULL,
    `admisionanticipo_nota` TEXT,
    PRIMARY KEY (`idadmisionanticipo`),
    INDEX `idadmision` (`idadmision`),
    CONSTRAINT `idadmision_admisionanticipo`
        FOREIGN KEY (`idadmision`)
        REFERENCES `admision` (`idadmision`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articulo`;

CREATE TABLE `articulo`
(
    `idarticulo` INTEGER NOT NULL AUTO_INCREMENT,
    `idtipo` INTEGER NOT NULL,
    `idudm` INTEGER NOT NULL,
    `articulo_nombre` VARCHAR(300),
    `articulo_codigobarras` VARCHAR(100),
    `articulo_descripcion` TEXT,
    `articulo_tipopresentacion` enum('Caja') NOT NULL,
    `articulo_cantidadpresentacion` INTEGER,
    `articulo_existencia` DECIMAL(10,2),
    `articulo_costo` DECIMAL(10,2),
    `articulo_precio` DECIMAL(10,2),
    `articulo_iva` DECIMAL(10,2),
    `articulo_inventariominimo` DECIMAL(10,2),
    `articulo_inventariomaximo` DECIMAL(10,2),
    `articulo_reorden` DECIMAL(10,2),
    `articulo_ubicacion` TEXT,
    PRIMARY KEY (`idarticulo`),
    INDEX `idtipo` (`idtipo`),
    INDEX `idudm` (`idudm`),
    CONSTRAINT `idtipo_tipo`
        FOREIGN KEY (`idtipo`)
        REFERENCES `tipo` (`idtipo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idudm_articulo`
        FOREIGN KEY (`idudm`)
        REFERENCES `udm` (`idudm`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cajachica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cajachica`;

CREATE TABLE `cajachica`
(
    `idcajachica` INTEGER NOT NULL AUTO_INCREMENT,
    `cajachica_nombre` VARCHAR(45) NOT NULL,
    `cajachica_descripcion` VARCHAR(45),
    `cajachica_fechainicio` DATE NOT NULL,
    `cajachica_fechafinal` DATE,
    `cajachica_total` DECIMAL(10,2),
    PRIMARY KEY (`idcajachica`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cajachicadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cajachicadetalle`;

CREATE TABLE `cajachicadetalle`
(
    `idcajachicadetalle` INTEGER NOT NULL,
    `idcajachica` INTEGER NOT NULL,
    `idgasto` INTEGER NOT NULL,
    `cajachicadetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `cajachicadetalle_monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcajachicadetalle`),
    INDEX `idcajachica` (`idcajachica`),
    INDEX `idgasto` (`idgasto`),
    CONSTRAINT `idcajachica_cajachicadetalle`
        FOREIGN KEY (`idcajachica`)
        REFERENCES `cajachica` (`idcajachica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idgasto_cajachicadetalle`
        FOREIGN KEY (`idgasto`)
        REFERENCES `gasto` (`idgasto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cargoadmision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cargoadmision`;

CREATE TABLE `cargoadmision`
(
    `idcargoadmision` INTEGER NOT NULL AUTO_INCREMENT,
    `idlugarinventario` INTEGER,
    `idservicio` INTEGER,
    `cargoadmision_tipo` enum('articulo','servicio') NOT NULL,
    `idadmision` INTEGER NOT NULL,
    `cargoadmision_fecha` DATETIME NOT NULL,
    `cargoadmision_cantidad` DECIMAL(10,2) NOT NULL,
    `cargoadmision_monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcargoadmision`),
    INDEX `idadmision` (`idadmision`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idadmision_cargoadmision`
        FOREIGN KEY (`idadmision`)
        REFERENCES `admision` (`idadmision`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarinventario_cargoadmision`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_cargoadmision`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cargoconsulta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cargoconsulta`;

CREATE TABLE `cargoconsulta`
(
    `idcargoconsulta` INTEGER NOT NULL AUTO_INCREMENT,
    `idlugarinventario` INTEGER,
    `idservicio` INTEGER,
    `cargoconsulta_tipo` enum('articulo','servicio') NOT NULL,
    `idconsulta` INTEGER NOT NULL,
    `cargoconsulta_fecha` DATETIME NOT NULL,
    `cantidad` DECIMAL(10,2) NOT NULL,
    `monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcargoconsulta`),
    INDEX `idconsulta` (`idconsulta`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idconsulta_cargoconsulta`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarinventario_cargoconsulta`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_cargoconsulta`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cita
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cita`;

CREATE TABLE `cita`
(
    `idcita` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER,
    `cita_fecha` DATE NOT NULL,
    `cita_hora` TIME NOT NULL,
    `cita_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idcita`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idmedico` (`idmedico`),
    CONSTRAINT `idmedico_cita`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_cita`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- consulta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `consulta`;

CREATE TABLE `consulta`
(
    `idconsulta` INTEGER NOT NULL,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER NOT NULL,
    `idcuarto` INTEGER NOT NULL,
    `consulta_fechaAdmision` DATETIME NOT NULL,
    `consulta_fechaSalida` DATETIME,
    `consulta_diagnostico` TEXT,
    `consulta_observaciones` TEXT,
    `consulta_status` enum('pagada','no pagada','pendiente') DEFAULT 'pendiente',
    `consulta_total` VARCHAR(45),
    PRIMARY KEY (`idconsulta`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idcuarto` (`idcuarto`),
    CONSTRAINT `idcuarto_consulta`
        FOREIGN KEY (`idcuarto`)
        REFERENCES `cuarto` (`idcuarto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_consulta`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_consulta`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- consultaanticipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `consultaanticipo`;

CREATE TABLE `consultaanticipo`
(
    `idconsultaanticipo` INTEGER NOT NULL AUTO_INCREMENT,
    `idconsulta` INTEGER NOT NULL,
    `consultaanticipo_fecha` DATETIME NOT NULL,
    `consultaanticipo_cantidad` DECIMAL(10,2) NOT NULL,
    `consultaanticipo_nota` TEXT,
    PRIMARY KEY (`idconsultaanticipo`),
    INDEX `idconsulta` (`idconsulta`),
    CONSTRAINT `idconsulta_consultaanticipo`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuarto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuarto`;

CREATE TABLE `cuarto`
(
    `idcuarto` INTEGER NOT NULL AUTO_INCREMENT,
    `cuarto_nombre` VARCHAR(300) NOT NULL,
    `cuarto_descripcion` TEXT NOT NULL,
    `cuarto_enuso` TINYINT(1) NOT NULL,
    `cuarto_extension` VARCHAR(45),
    PRIMARY KEY (`idcuarto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- datosfacturacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `datosfacturacion`;

CREATE TABLE `datosfacturacion`
(
    `iddatosfacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `datosfacturacion_razonsocial` VARCHAR(45),
    `datosfacturacion_rfc` VARCHAR(45),
    `datosfacturacion_calle` VARCHAR(45),
    `datosfacturacion_noexterior` VARCHAR(45),
    `datosfacturacion_nointerior` VARCHAR(45),
    `datosfacturacion_colonia` VARCHAR(45),
    `datosfacturacion_ciudad` VARCHAR(45),
    `datosfacturacion_estado` VARCHAR(45),
    `datosfacturacion_pais` VARCHAR(45),
    `datosfacturacion_codigopostal` VARCHAR(45),
    `datosfacturacion_telefono` VARCHAR(45),
    `datosfacturacion_email` VARCHAR(45),
    PRIMARY KEY (`iddatosfacturacion`),
    INDEX `idpaciente` (`idpaciente`),
    CONSTRAINT `idpaciente_datosfacturacion`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- datosfacturacionempleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `datosfacturacionempleado`;

CREATE TABLE `datosfacturacionempleado`
(
    `iddatosfacturacionempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `datosfacturacionempleado_razonsocial` VARCHAR(45),
    `datosfacturacionempleado_rfc` VARCHAR(45),
    `datosfacturacionempleado_calle` VARCHAR(45),
    `datosfacturacionempleado_noexterior` VARCHAR(45),
    `datosfacturacionempleado_nointerior` VARCHAR(45),
    `datosfacturacionempleado_colonia` VARCHAR(45),
    `datosfacturacionempleado_ciudad` VARCHAR(45),
    `datosfacturacionempleado_estado` VARCHAR(45),
    `datosfacturacionempleado_pais` VARCHAR(45),
    `datosfacturacionempleado_codigopostal` VARCHAR(45),
    `datosfacturacionempleado_telefono` VARCHAR(45),
    `datosfacturacionempleado_email` VARCHAR(45),
    PRIMARY KEY (`iddatosfacturacionempleado`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_datosfacturacionempleado`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- datosfacturacionmedico
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `datosfacturacionmedico`;

CREATE TABLE `datosfacturacionmedico`
(
    `iddatosfacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idmedico` INTEGER NOT NULL,
    `datosfacturacionmedico_razonsocial` VARCHAR(45),
    `datosfacturacionmedico_rfc` VARCHAR(45),
    `datosfacturacionmedico_calle` VARCHAR(45),
    `datosfacturacionmedico_noexterior` VARCHAR(45),
    `datosfacturacionmedico_nointerior` VARCHAR(45),
    `datosfacturacionmedico_colonia` VARCHAR(45),
    `datosfacturacionmedico_ciudad` VARCHAR(45),
    `datosfacturacionmedico_estado` VARCHAR(45),
    `datosfacturacionmedico_pais` VARCHAR(45),
    `datosfacturacionmedico_codigopostal` VARCHAR(45),
    `datosfacturacionmedico_telefono` VARCHAR(45),
    `datosfacturacionmedico_email` VARCHAR(45),
    PRIMARY KEY (`iddatosfacturacion`),
    INDEX `idmedico` (`idmedico`),
    CONSTRAINT `idmedico_datosfacturacionmedico`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado`
(
    `idempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `empleado_nombre` VARCHAR(45) NOT NULL,
    `empleado_apellidopaterno` VARCHAR(45) NOT NULL,
    `empleado_apellidomaterno` VARCHAR(45) NOT NULL,
    `empleado_nombreusuario` VARCHAR(45) NOT NULL,
    `empleado_password` VARCHAR(45) NOT NULL,
    `empleado_email` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadomodulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadomodulo`;

CREATE TABLE `empleadomodulo`
(
    `idempleadomodulo` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `idmodulo` INTEGER NOT NULL,
    PRIMARY KEY (`idempleadomodulo`),
    INDEX `idempleado` (`idempleado`),
    INDEX `idmodulo` (`idmodulo`),
    CONSTRAINT `idempleado_empleadomodulo`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmodulo_empleadomodulo`
        FOREIGN KEY (`idmodulo`)
        REFERENCES `modulo` (`idmodulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- especialidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `especialidad`;

CREATE TABLE `especialidad`
(
    `idespecialidad` INTEGER NOT NULL AUTO_INCREMENT,
    `especialidad_nombre` VARCHAR(45) NOT NULL,
    `especialidad_descripcion` VARCHAR(45),
    PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- factura
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura`
(
    `idfactura` INTEGER NOT NULL AUTO_INCREMENT,
    `iddatosfacturacion` INTEGER NOT NULL,
    `idconsulta` INTEGER NOT NULL,
    `factura_url_xml` VARCHAR(45) NOT NULL,
    `factura_url_pdf` VARCHAR(45) NOT NULL,
    `factura_fecha` DATETIME NOT NULL,
    `factura_sellosat` TEXT NOT NULL,
    `factura_certificadosat` TEXT NOT NULL,
    `factura_cadenaoriginal` VARCHAR(45) NOT NULL,
    `factura_cfdi` VARCHAR(45) NOT NULL,
    `factura_mensaje` VARCHAR(45) NOT NULL,
    `factura_qrcode` VARCHAR(45) NOT NULL,
    `factura_tipodepago` enum('unico','parcial'),
    `factura_status` enum('creada','cancelada'),
    `factura_tipo` enum('ingreso','egreso'),
    PRIMARY KEY (`idfactura`),
    INDEX `iddatosfacturacion` (`iddatosfacturacion`),
    INDEX `idconsulta` (`idconsulta`),
    CONSTRAINT `idconsulta_factura`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `iddatosfacturacion_factura`
        FOREIGN KEY (`iddatosfacturacion`)
        REFERENCES `datosfacturacion` (`iddatosfacturacion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- gasto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `gasto`;

CREATE TABLE `gasto`
(
    `idgasto` INTEGER NOT NULL AUTO_INCREMENT,
    `gasto_nombre` VARCHAR(45) NOT NULL,
    `gasto_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idgasto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- lugar
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `lugar`;

CREATE TABLE `lugar`
(
    `idlugar` INTEGER NOT NULL AUTO_INCREMENT,
    `lugar_nombre` VARCHAR(45) NOT NULL,
    `lugar_descripcion` VARCHAR(45),
    PRIMARY KEY (`idlugar`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- lugarinventario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `lugarinventario`;

CREATE TABLE `lugarinventario`
(
    `idlugarinventario` INTEGER NOT NULL,
    `idlugar` INTEGER NOT NULL,
    `idordencompradetalle` INTEGER NOT NULL,
    `lugarinventario_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idlugarinventario`),
    INDEX `idlugar` (`idlugar`),
    INDEX `idordencompradetalle` (`idordencompradetalle`),
    CONSTRAINT `idlugar_lugarinventario`
        FOREIGN KEY (`idlugar`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idordencompradetalle_lugarinventario`
        FOREIGN KEY (`idordencompradetalle`)
        REFERENCES `ordencompradetalle` (`idordencompradetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medico
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medico`;

CREATE TABLE `medico`
(
    `idmedico` INTEGER NOT NULL AUTO_INCREMENT,
    `idespecialidad` INTEGER NOT NULL,
    `medico_nombre` VARCHAR(45) NOT NULL,
    `medico_apellidopaterno` VARCHAR(45) NOT NULL,
    `medico_apellidomaterno` VARCHAR(45) NOT NULL,
    `medico_calle` VARCHAR(45),
    `medico_noexterior` VARCHAR(45),
    `medico_nointerior` VARCHAR(45),
    `medico_colonia` VARCHAR(45),
    `medico_codigopostal` VARCHAR(45),
    `medico_ciudad` VARCHAR(45),
    `medico_estado` VARCHAR(45),
    `medico_pais` VARCHAR(45),
    `medico_telefono` VARCHAR(45),
    `medico_telefonocelular` VARCHAR(45),
    `medico_clave` VARCHAR(45),
    `medico_dgp` VARCHAR(45),
    `medico_ssa` VARCHAR(45),
    `medico_ae` VARCHAR(45),
    PRIMARY KEY (`idmedico`),
    INDEX `idespecialidad` (`idespecialidad`),
    CONSTRAINT `idespecialidad`
        FOREIGN KEY (`idespecialidad`)
        REFERENCES `especialidad` (`idespecialidad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medicoespecialidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medicoespecialidad`;

CREATE TABLE `medicoespecialidad`
(
    `idmedicoespecialidad` INTEGER NOT NULL AUTO_INCREMENT,
    `idmedico` INTEGER NOT NULL,
    `idespecialidad` INTEGER NOT NULL,
    PRIMARY KEY (`idmedicoespecialidad`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idespecialidad` (`idespecialidad`),
    CONSTRAINT `idespecialidad_medicoespecialidad`
        FOREIGN KEY (`idespecialidad`)
        REFERENCES `especialidad` (`idespecialidad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_medicoespecialidad`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- modulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `modulo`;

CREATE TABLE `modulo`
(
    `idmodulo` INTEGER NOT NULL AUTO_INCREMENT,
    `modulo_nombre` VARCHAR(250) NOT NULL,
    `modulo_descripcion` TEXT,
    PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordencompra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordencompra`;

CREATE TABLE `ordencompra`
(
    `idordencompra` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedor` INTEGER NOT NULL,
    `ordencompra_nofactura` VARCHAR(45) NOT NULL,
    `ordencompra_facturapdf` TEXT,
    `ordencompra_fecha` DATETIME NOT NULL,
    `ordencompra_importe` DECIMAL(10,2) NOT NULL,
    `ordencompra_status` enum('pagada','no pagada') NOT NULL,
    PRIMARY KEY (`idordencompra`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idproveedor_ordencompra`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordencompradetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordencompradetalle`;

CREATE TABLE `ordencompradetalle`
(
    `idordencompradetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idordencompra` INTEGER NOT NULL,
    `idarticulo` INTEGER NOT NULL,
    `ordencompradetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_costo` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_precio` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_importe` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_caducidad` DATE,
    `ordencompradetalle_existencia` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idordencompradetalle`),
    INDEX `irordencompra` (`idordencompra`),
    INDEX `idarticulo` (`idarticulo`),
    CONSTRAINT `idarticulo_ordencompradetalle`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idordencompra_ordencompradetalle`
        FOREIGN KEY (`idordencompra`)
        REFERENCES `ordencompra` (`idordencompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paciente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente`
(
    `idpaciente` INTEGER NOT NULL AUTO_INCREMENT,
    `paciente_nombre` VARCHAR(250) NOT NULL,
    `paciente_ap` VARCHAR(100) NOT NULL,
    `paciente_am` VARCHAR(45),
    `paciente_calle` VARCHAR(45),
    `paciente_noexterior` VARCHAR(45),
    `paciente_nointerior` VARCHAR(45),
    `paciente_colonia` VARCHAR(45),
    `paciente_ciudad` VARCHAR(45),
    `paciente_estado` VARCHAR(45),
    `paciente_pais` VARCHAR(45),
    `paciente_telefono` VARCHAR(45),
    `paciente_telefonocelular` VARCHAR(45),
    `paciente_edad` VARCHAR(45),
    `paciente_sexo` enum('Masculino','Femenino') NOT NULL,
    `paciente_estadocivil` enum('Soltero(a)','Casado(a)','Divorciado(a)','Viudo(a)'),
    `paciente_ocupacion` VARCHAR(45),
    `paciente_conyuge` VARCHAR(45),
    `paciente_padre` VARCHAR(45),
    `paciente_madre` VARCHAR(45),
    `paciente_responsable` VARCHAR(45),
    `paciente_telefonoresponsable` VARCHAR(45),
    PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paquete
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paquete`;

CREATE TABLE `paquete`
(
    `idpaquete` INTEGER NOT NULL AUTO_INCREMENT,
    `paquete_nombre` VARCHAR(45) NOT NULL,
    `paquete_descripcion` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idpaquete`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paquetedetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paquetedetalle`;

CREATE TABLE `paquetedetalle`
(
    `idpaquetedetalle` INTEGER NOT NULL,
    `idpaquete` INTEGER NOT NULL,
    `idarticulo` INTEGER,
    `idservicio` INTEGER,
    `paquetedetalle_tipo` enum('articulo','servicio') NOT NULL,
    `paquetedetalle_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idpaquetedetalle`),
    INDEX `idarticulo` (`idarticulo`),
    INDEX `idpaquete` (`idpaquete`),
    CONSTRAINT `idarticulo`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaquete`
        FOREIGN KEY (`idpaquete`)
        REFERENCES `paquete` (`idpaquete`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_nombre` VARCHAR(45),
    `proveedor_contacto` VARCHAR(45),
    `proveedor_direccion` VARCHAR(45),
    `proveedor_direccion2` VARCHAR(45),
    `proveedor_colonia` VARCHAR(45),
    `proveedor_codigopostal` VARCHAR(45),
    `proveedor_ciudad` VARCHAR(45),
    `proveedor_estado` VARCHAR(45),
    `proveedor_pais` VARCHAR(45),
    `proveedor_email` VARCHAR(45),
    `proveedor_telefono` VARCHAR(45),
    `proveedor_telefonocelular` VARCHAR(45),
    `proveedor_fax` VARCHAR(45),
    PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio`
(
    `idservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `servicio_nombre` VARCHAR(300) NOT NULL,
    `servicio_descripcion` TEXT NOT NULL,
    `servicio_costo` DECIMAL(10,2) NOT NULL,
    `servicio_precio` DECIMAL(10,2) NOT NULL,
    `servicio_iva` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;

CREATE TABLE `tipo`
(
    `idtipo` INTEGER NOT NULL AUTO_INCREMENT,
    `tipo_nombre` VARCHAR(300) NOT NULL,
    `tipo_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- traspaso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `traspaso`;

CREATE TABLE `traspaso`
(
    `idinventariolugar` INTEGER NOT NULL AUTO_INCREMENT,
    `idlugarremitente` INTEGER NOT NULL,
    `idlugardestinatario` INTEGER NOT NULL,
    `traspaso_fecha` DATETIME NOT NULL,
    `traspaso_status` enum('recibido','cancelado','en transito','no recibido') NOT NULL,
    PRIMARY KEY (`idinventariolugar`,`idlugarremitente`,`idlugardestinatario`),
    INDEX `idlugarremitente` (`idlugarremitente`),
    INDEX `idlugardestinantario` (`idlugardestinatario`),
    CONSTRAINT `idlugardestinatario_traspaso`
        FOREIGN KEY (`idlugardestinatario`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarremitente_traspaso`
        FOREIGN KEY (`idlugarremitente`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- traspasodetalles
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `traspasodetalles`;

CREATE TABLE `traspasodetalles`
(
    `idtraspasodetalles` INTEGER NOT NULL AUTO_INCREMENT,
    `idtraspaso` INTEGER NOT NULL,
    `idlugarinventario` INTEGER NOT NULL,
    `traspaso_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idtraspasodetalles`),
    INDEX `idtraspaso` (`idtraspaso`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    CONSTRAINT `idlugarinventario_traspasodetalles`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtraspaso_traspasodetalles`
        FOREIGN KEY (`idtraspaso`)
        REFERENCES `traspaso` (`idinventariolugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- udm
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `udm`;

CREATE TABLE `udm`
(
    `idudm` INTEGER NOT NULL AUTO_INCREMENT,
    `udm_nombre` VARCHAR(45) NOT NULL,
    `udm_descripcion` VARCHAR(45),
    PRIMARY KEY (`idudm`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
