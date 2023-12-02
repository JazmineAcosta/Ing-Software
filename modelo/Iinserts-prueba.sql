CREATE TABLE
    solicitud_compra (
        id_solicitud tinyint(4) NOT NULL auto_increment,
        id_empleado_solicita bigint(20),
        id_producto smallint(6),
        cntd_producto smallint default 0,
        val_total_compra decimal(8, 2) default 0,
        fecha_solicitud datetime not null,
        estado_factura varchar(1) not null,
        primary key (id_solicitud),
        foreign key (id_empleado_solicita) references empleado (id_empleado),
        foreign key (id_producto) references producto (id_producto)
    );

CREATE TABLE
    compra (
        id_compra tinyint(4) NOT NULL auto_increment,
        id_solicitud tinyint(4),
        id_empleado_solicita bigint(20),
        id_proveedor tinyint(4),
        id_producto smallint(6),
        cntd_producto smallint default 0,
        val_total_compra decimal(8, 2) default 0,
        fecha_compra datetime not null,
        estado_factura varchar(1) not null,
        primary key (id_compra),
        foreign key (id_solicitud) references solicitud_compra (id_solicitud),
        foreign key (id_empleado_solicita) references empleado (id_empleado),
        foreign key (id_proveedor) references proveedor (id_proveedor),
        foreign key (id_producto) references producto (id_producto)
    );