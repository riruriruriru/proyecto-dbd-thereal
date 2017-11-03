/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     02-11-2017 22:23:57                          */
/*==============================================================*/


drop index REALIZA_FK;

drop index ACTIVIDAD_PK;

drop table ACTIVIDAD;

drop index CATASTROFE_PK;

drop table CATASTROFE;

drop index CENTRO_DE_ACOPIO_PK;

drop table CENTRO_DE_ACOPIO;

drop index CIUDAD_PK;

drop table CIUDAD;

drop index ID_COMENTARIO_PK;

drop table COMENTARIO;

drop index COMUNA_PK;

drop table COMUNA;

drop index DONACION_PK;

drop table DONACION;

drop index DONANTE_PK;

drop table DONANTES;

drop index EVENTO_PK;

drop table EVENTO;

drop index ID_HISTORIAL_CATASTROFE_PK;

drop table HISTORIAL_CATASTROFE;

drop index ID_HISTORIAL_PK;

drop table HISTORIAL_MEDIDAS;

drop index ID_HISTORIAL_USUARIO_PK;

drop table HISTORIAL_USUARIO;

drop index ID_HISTORICAL_PK;

drop table HISTORICAL_USER;

drop index ID_INSUMO_PK;

drop table INSUMO;

drop index LUGAR_PK;

drop table LUGAR;

drop index ID_LUGAR_CATASTROFE_PK;

drop table LUGAR_CATASTROFE;

drop index ASIGNA_FK;

drop index CREA_FK;

drop index MEDIDAS_PK;

drop table MEDIDAS;

drop index ORGANIZACION_PK;

drop table ORGANIZACION;

drop index REGION_PK;

drop table REGION;

drop index ES_PARTE_FK;

drop index RNV_PK;

drop table RNV;

drop index ID_TIPO_ACTIVIDAD_PK;

drop table TIPO_ACTIVIDAD;

drop index ID_TIPO_BENEFICIENCIA_PK;

drop table TIPO_BENEFICIENCIA;

drop index ID_TIPO_CATASTROFE_PK;

drop table TIPO_CATASTROFE;

drop index ID_TIPO_INSUMO;

drop table TIPO_INSUMO;

drop index ID_TIPO_TRABAJO_PK;

drop table TIPO_TRABAJO;

drop index TIPO_USUARIO_PK;

drop table TIPO_USUARIO;

drop index TRABAJO_PK;

drop table TRABAJO;

drop index TIENE_FK;

drop index USUARIO_PK;

drop table USUARIO;

drop index VOLUNTARIADO_PK;

drop table VOLUNTARIADO;

drop index PARTICIPAN_VOLUNTARIOS_FK;

drop index VOLUNTARIADO_TIENE_FK;

drop index VOLUNTARIO_PK;

drop table VOLUNTARIO;

/*==============================================================*/
/* Table: ACTIVIDAD                                             */
/*==============================================================*/
create table ACTIVIDAD (
   ID_ACTIVIDAD         SERIAL not null,
   ID_EVENTO            INT4                 null,
   ID_TIPO_ACTIVIDAD    INT4                 null,
   constraint PK_ACTIVIDAD primary key (ID_ACTIVIDAD)
);

/*==============================================================*/
/* Index: ACTIVIDAD_PK                                          */
/*==============================================================*/
create unique index ACTIVIDAD_PK on ACTIVIDAD (
ID_ACTIVIDAD
);

/*==============================================================*/
/* Index: REALIZA_FK                                            */
/*==============================================================*/
create  index REALIZA_FK on ACTIVIDAD (
ID_EVENTO
);

/*==============================================================*/
/* Table: CATASTROFE                                            */
/*==============================================================*/
create table CATASTROFE (
   ID_CATASTROFE        SERIAL not null,
   ID_TIPO_CATASTROFE   INT4                 null,
   ID_HISTORIAL         INT4                 null,
   FECHA_TERMINO        DATE                 not null,
   FECHA_INICIO         DATE                 not null,
   constraint PK_CATASTROFE primary key (ID_CATASTROFE)
);

/*==============================================================*/
/* Index: CATASTROFE_PK                                         */
/*==============================================================*/
create unique index CATASTROFE_PK on CATASTROFE (
ID_CATASTROFE
);

/*==============================================================*/
/* Table: CENTRO_DE_ACOPIO                                      */
/*==============================================================*/
create table CENTRO_DE_ACOPIO (
   ID_ACOPIO            SERIAL not null,
   ID_MEDIDAS           INT4                 not null,
   TIPO_BIEN            VARCHAR(20)          not null,
   SITUACION            BOOL                 not null,
   DIRECCION            VARCHAR(40)          not null,
   RECIBE               BOOL                 not null,
   constraint PK_CENTRO_DE_ACOPIO primary key (ID_ACOPIO)
);

/*==============================================================*/
/* Index: CENTRO_DE_ACOPIO_PK                                   */
/*==============================================================*/
create unique index CENTRO_DE_ACOPIO_PK on CENTRO_DE_ACOPIO (
ID_ACOPIO
);

/*==============================================================*/
/* Table: CIUDAD                                                */
/*==============================================================*/
create table CIUDAD (
   ID_CIUDAD            SERIAL not null,
   NOMBRE_CIUDAD        VARCHAR(20)          not null,
   constraint PK_CIUDAD primary key (ID_CIUDAD)
);

/*==============================================================*/
/* Index: CIUDAD_PK                                             */
/*==============================================================*/
create unique index CIUDAD_PK on CIUDAD (
ID_CIUDAD
);

/*==============================================================*/
/* Table: COMENTARIO                                            */
/*==============================================================*/
create table COMENTARIO (
   ID_COMENTARIO        SERIAL               not null,
   ID_MEDIDAS           INT4                 null,
   EMAIL                VARCHAR(40)          null,
   CUERPO               TEXT                 not null,
   constraint PK_COMENTARIO primary key (ID_COMENTARIO)
);

/*==============================================================*/
/* Index: ID_COMENTARIO_PK                                      */
/*==============================================================*/
create unique index ID_COMENTARIO_PK on COMENTARIO (
(ID_COMENTARIO)
);

/*==============================================================*/
/* Table: COMUNA                                                */
/*==============================================================*/
create table COMUNA (
   ID_COMUNA            SERIAL not null,
   NOMBRE_C             VARCHAR(20)          not null,
   constraint PK_COMUNA primary key (ID_COMUNA)
);

/*==============================================================*/
/* Index: COMUNA_PK                                             */
/*==============================================================*/
create unique index COMUNA_PK on COMUNA (
ID_COMUNA
);

/*==============================================================*/
/* Table: DONACION                                              */
/*==============================================================*/
create table DONACION (
   ID_DONACION          SERIAL not null,
   ID_MEDIDAS           INT4                 null,
   OBJETIVO             INT4                 not null,
   NCUENTA              INT4                 not null,
   constraint PK_DONACION primary key (ID_DONACION)
);

/*==============================================================*/
/* Index: DONACION_PK                                           */
/*==============================================================*/
create unique index DONACION_PK on DONACION (
ID_DONACION
);

/*==============================================================*/
/* Table: DONANTES                                              */
/*==============================================================*/
create table DONANTES (
   ID_DONATE            SERIAL               not null,
   ID_DONACION          INT4                 null,
   EMAIL                VARCHAR(40)          null,
   MONTO                INT4                 not null,
   constraint PK_DONANTES primary key (ID_DONATE)
);

/*==============================================================*/
/* Index: DONANTE_PK                                            */
/*==============================================================*/
create unique index DONANTE_PK on DONANTES (
( ( ID_DONATE ) )
);

/*==============================================================*/
/* Table: EVENTO                                                */
/*==============================================================*/
create table EVENTO (
   ID_EVENTO            SERIAL not null,
   ID_MEDIDAS           INT4                 null,
   FECHA_INICIO         DATE                 not null,
   FECHA_TERMINO        DATE                 not null,
   CANTIDADVOLUNTARIOS  INT4                 not null,
   MONTO_RECAUDADO      INT4                 null,
   constraint PK_EVENTO primary key (ID_EVENTO)
);

/*==============================================================*/
/* Index: EVENTO_PK                                             */
/*==============================================================*/
create unique index EVENTO_PK on EVENTO (
ID_EVENTO
);

/*==============================================================*/
/* Table: HISTORIAL_CATASTROFE                                  */
/*==============================================================*/
create table HISTORIAL_CATASTROFE (
   ID_HISTORIAL         SERIAL               not null,
   CANTIDAD_CATASTROFES INT4                 not null,
   CANTIDAD_VOLUNTARIOS INT4                 not null,
   TOTAL_RECAUDADO      INT4                 not null,
   TOTAL_MEDIDAS        INT4                 not null,
   NUMERO_DONACIONES    INT4                 not null,
   NUMERO_ORGANIZACIONES INT4                 not null,
   TIPO_CATASTROFE_RECURRENTE VARCHAR(40)          not null,
   LUGAR_MAS_AFECTADO   VARCHAR(40)          null,
   constraint PK_HISTORIAL_CATASTROFE primary key (ID_HISTORIAL)
);

/*==============================================================*/
/* Index: ID_HISTORIAL_CATASTROFE_PK                            */
/*==============================================================*/
create unique index ID_HISTORIAL_CATASTROFE_PK on HISTORIAL_CATASTROFE (
(ID_HISTORIAL)
);

/*==============================================================*/
/* Table: HISTORIAL_MEDIDAS                                     */
/*==============================================================*/
create table HISTORIAL_MEDIDAS (
   ID_HISTORIAL         SERIAL               not null,
   TOP_MEDIDA           VARCHAR(40)          not null,
   TOTAL_RECAUDADO      INT4                 not null,
   TOP_DONANTE          VARCHAR(40)          not null,
   TOP_ACTIVIDAD        VARCHAR(40)          not null,
   NUMERO_VOLUNTARIOS   INT4                 not null,
   constraint PK_HISTORIAL_MEDIDAS primary key (ID_HISTORIAL)
);

/*==============================================================*/
/* Index: ID_HISTORIAL_PK                                       */
/*==============================================================*/
create unique index ID_HISTORIAL_PK on HISTORIAL_MEDIDAS (
(ID_HISTORIAL)
);

/*==============================================================*/
/* Table: HISTORIAL_USUARIO                                     */
/*==============================================================*/
create table HISTORIAL_USUARIO (
   ID_HISTORIAL_USUARIO SERIAL               not null,
   TOTAL_MEDIDAS        INT4                 null,
   TOTAL_DONACIONES     INT4                 null,
   NUMERO_PARTICIPACIONES INT4                 null,
   constraint PK_HISTORIAL_USUARIO primary key (ID_HISTORIAL_USUARIO)
);

/*==============================================================*/
/* Index: ID_HISTORIAL_USUARIO_PK                               */
/*==============================================================*/
create unique index ID_HISTORIAL_USUARIO_PK on HISTORIAL_USUARIO (
(ID_HISTORIAL_USUARIO)
);

/*==============================================================*/
/* Table: HISTORICAL_USER                                       */
/*==============================================================*/
create table HISTORICAL_USER (
   ID_HISTORICAL        SERIAL               not null,
   ID_HISTORIAL_USUARIO INT4                 null,
   EMAIL                VARCHAR(40)          null,
   constraint PK_HISTORICAL_USER primary key (ID_HISTORICAL)
);

/*==============================================================*/
/* Index: ID_HISTORICAL_PK                                      */
/*==============================================================*/
create unique index ID_HISTORICAL_PK on HISTORICAL_USER (
(ID_HISTORICAL)
);

/*==============================================================*/
/* Table: INSUMO                                                */
/*==============================================================*/
create table INSUMO (
   ID_INSUMO            SERIAL               not null,
   ID_ACOPIO            INT4                 null,
   ID_TIPO_INSUMO       INT4                 null,
   constraint PK_INSUMO primary key (ID_INSUMO)
);

/*==============================================================*/
/* Index: ID_INSUMO_PK                                          */
/*==============================================================*/
create unique index ID_INSUMO_PK on INSUMO (
(ID_INSUMO)
);

/*==============================================================*/
/* Table: LUGAR                                                 */
/*==============================================================*/
create table LUGAR (
   ID_LUGAR             SERIAL not null,
   ID_CATASTROFE        INT4                 null,
   ID_CIUDAD            INT4                 null,
   ID_COMUNA            INT4                 null,
   ID_REGION            INT4                 null,
   constraint PK_LUGAR primary key (ID_LUGAR)
);

/*==============================================================*/
/* Index: LUGAR_PK                                              */
/*==============================================================*/
create unique index LUGAR_PK on LUGAR (
ID_LUGAR
);

/*==============================================================*/
/* Table: LUGAR_CATASTROFE                                      */
/*==============================================================*/
create table LUGAR_CATASTROFE (
   ID_LUGAR_CATASTROFE  SERIAL               not null,
   ID_CATASTROFE        INT4                 null,
   ID_LUGAR             INT4                 null,
   constraint PK_LUGAR_CATASTROFE primary key (ID_LUGAR_CATASTROFE)
);

/*==============================================================*/
/* Index: ID_LUGAR_CATASTROFE_PK                                */
/*==============================================================*/
create unique index ID_LUGAR_CATASTROFE_PK on LUGAR_CATASTROFE (
(ID_LUGAR_CATASTROFE)
);

/*==============================================================*/
/* Table: MEDIDAS                                               */
/*==============================================================*/
create table MEDIDAS (
   ID_MEDIDAS           SERIAL not null,
   ID_CATASTROFE        INT4                 null,
   ID_ORGANIZACION      INT4                 null,
   EMAIL                VARCHAR(40)          null,
   ID_HISTORIAL         INT4                 null,
   FECHA_INICIO         DATE                 not null,
   FECHA_TERMINO        DATE                 not null,
   PUBLICO              BOOL                 not null,
   constraint PK_MEDIDAS primary key (ID_MEDIDAS)
);

/*==============================================================*/
/* Index: MEDIDAS_PK                                            */
/*==============================================================*/
create unique index MEDIDAS_PK on MEDIDAS (
ID_MEDIDAS
);

/*==============================================================*/
/* Index: CREA_FK                                               */
/*==============================================================*/
create  index CREA_FK on MEDIDAS (
ID_ORGANIZACION
);

/*==============================================================*/
/* Index: ASIGNA_FK                                             */
/*==============================================================*/
create  index ASIGNA_FK on MEDIDAS (
ID_CATASTROFE
);

/*==============================================================*/
/* Table: ORGANIZACION                                          */
/*==============================================================*/
create table ORGANIZACION (
   ID_ORGANIZACION      SERIAL not null,
   ID_TIPO_BENEFICIENCIA INT4                 null,
   TIPO_BENEFICENCIA    VARCHAR(20)          not null,
   constraint PK_ORGANIZACION primary key (ID_ORGANIZACION)
);

/*==============================================================*/
/* Index: ORGANIZACION_PK                                       */
/*==============================================================*/
create unique index ORGANIZACION_PK on ORGANIZACION (
ID_ORGANIZACION
);

/*==============================================================*/
/* Table: REGION                                                */
/*==============================================================*/
create table REGION (
   ID_REGION            SERIAL not null,
   NOMBRE_REGION        VARCHAR(20)          not null,
   constraint PK_REGION primary key (ID_REGION)
);

/*==============================================================*/
/* Index: REGION_PK                                             */
/*==============================================================*/
create unique index REGION_PK on REGION (
ID_REGION
);

/*==============================================================*/
/* Table: RNV                                                   */
/*==============================================================*/
create table RNV (
   ID_RNV               SERIAL not null,
   EMAIL                VARCHAR(40)          null,
   DISPONIBILIDAD       BOOL                 not null,
   constraint PK_RNV primary key (ID_RNV)
);

/*==============================================================*/
/* Index: RNV_PK                                                */
/*==============================================================*/
create unique index RNV_PK on RNV (
ID_RNV
);

/*==============================================================*/
/* Index: ES_PARTE_FK                                           */
/*==============================================================*/
create  index ES_PARTE_FK on RNV (
EMAIL
);

/*==============================================================*/
/* Table: TIPO_ACTIVIDAD                                        */
/*==============================================================*/
create table TIPO_ACTIVIDAD (
   ID_TIPO_ACTIVIDAD    SERIAL               not null,
   DESCRIPCION          TEXT                 null,
   constraint PK_TIPO_ACTIVIDAD primary key (ID_TIPO_ACTIVIDAD)
);

/*==============================================================*/
/* Index: ID_TIPO_ACTIVIDAD_PK                                  */
/*==============================================================*/
create unique index ID_TIPO_ACTIVIDAD_PK on TIPO_ACTIVIDAD (
(ID_TIPO_ACTIVIDAD)
);

/*==============================================================*/
/* Table: TIPO_BENEFICIENCIA                                    */
/*==============================================================*/
create table TIPO_BENEFICIENCIA (
   ID_TIPO_BENEFICIENCIA SERIAL               not null,
   NOMBRE_TIPO          VARCHAR(40)          not null,
   DESCRIPCION          TEXT                 not null,
   constraint PK_TIPO_BENEFICIENCIA primary key (ID_TIPO_BENEFICIENCIA)
);

/*==============================================================*/
/* Index: ID_TIPO_BENEFICIENCIA_PK                              */
/*==============================================================*/
create unique index ID_TIPO_BENEFICIENCIA_PK on TIPO_BENEFICIENCIA (
(ID_TIPO_BENEFICIENCIA)
);

/*==============================================================*/
/* Table: TIPO_CATASTROFE                                       */
/*==============================================================*/
create table TIPO_CATASTROFE (
   ID_TIPO_CATASTROFE   SERIAL               not null,
   DESCRIPCION          TEXT                 null,
   NOMBRE               VARCHAR(40)          null,
   constraint PK_TIPO_CATASTROFE primary key (ID_TIPO_CATASTROFE)
);

/*==============================================================*/
/* Index: ID_TIPO_CATASTROFE_PK                                 */
/*==============================================================*/
create unique index ID_TIPO_CATASTROFE_PK on TIPO_CATASTROFE (
(ID_TIPO_CATASTROFE)
);

/*==============================================================*/
/* Table: TIPO_INSUMO                                           */
/*==============================================================*/
create table TIPO_INSUMO (
   ID_TIPO_INSUMO       SERIAL               not null,
   NOMBRE_INSUMO        VARCHAR(40)          not null,
   DESCRIPCION          TEXT                 not null,
   constraint PK_TIPO_INSUMO primary key (ID_TIPO_INSUMO)
);

/*==============================================================*/
/* Index: ID_TIPO_INSUMO                                        */
/*==============================================================*/
create unique index ID_TIPO_INSUMO on TIPO_INSUMO (
(ID_TIPO_INSUMO)
);

/*==============================================================*/
/* Table: TIPO_TRABAJO                                          */
/*==============================================================*/
create table TIPO_TRABAJO (
   ID_TIPO_TRABAJO      SERIAL               not null,
   DESCRIPCION          TEXT                 not null,
   constraint PK_TIPO_TRABAJO primary key (ID_TIPO_TRABAJO)
);

/*==============================================================*/
/* Index: ID_TIPO_TRABAJO_PK                                    */
/*==============================================================*/
create unique index ID_TIPO_TRABAJO_PK on TIPO_TRABAJO (
(ID_TIPO_TRABAJO)
);

/*==============================================================*/
/* Table: TIPO_USUARIO                                          */
/*==============================================================*/
create table TIPO_USUARIO (
   ID_TIPO              SERIAL not null,
   DESCRIPCION          TEXT                 not null,
   NOMBRE_TIPO          VARCHAR(40)          not null,
   constraint PK_TIPO_USUARIO primary key (ID_TIPO)
);

/*==============================================================*/
/* Index: TIPO_USUARIO_PK                                       */
/*==============================================================*/
create unique index TIPO_USUARIO_PK on TIPO_USUARIO (
ID_TIPO
);

/*==============================================================*/
/* Table: TRABAJO                                               */
/*==============================================================*/
create table TRABAJO (
   ID_TRABAJO           SERIAL not null,
   ID_TIPO_TRABAJO      INT4                 not null,
   ID_RNV               INT4                 not null,
   constraint PK_TRABAJO primary key (ID_TRABAJO)
);

/*==============================================================*/
/* Index: TRABAJO_PK                                            */
/*==============================================================*/
create unique index TRABAJO_PK on TRABAJO (
ID_TRABAJO
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO (
   EMAIL                VARCHAR(40)          not null,
   ID_TIPO              INT4                 null,
   NOMBRE               VARCHAR(20)          not null,
   APELLIDO             VARCHAR(20)          not null,
   TELEFOMO             VARCHAR(20)          not null,
   PASSWORD             VARCHAR(20)          not null,
   constraint PK_USUARIO primary key (EMAIL)
);

/*==============================================================*/
/* Index: USUARIO_PK                                            */
/*==============================================================*/
create unique index USUARIO_PK on USUARIO (
EMAIL
);

/*==============================================================*/
/* Index: TIENE_FK                                              */
/*==============================================================*/
create  index TIENE_FK on USUARIO (
ID_TIPO
);

/*==============================================================*/
/* Table: VOLUNTARIADO                                          */
/*==============================================================*/
create table VOLUNTARIADO (
   ID_VOLUNTARIADO      SERIAL not null,
   ID_MEDIDAS           INT4                 null,
   VOLUNTARIOS_OBJETIVO INT4                 not null,
   FECHA                DATE                 null,
   constraint PK_VOLUNTARIADO primary key (ID_VOLUNTARIADO)
);

/*==============================================================*/
/* Index: VOLUNTARIADO_PK                                       */
/*==============================================================*/
create unique index VOLUNTARIADO_PK on VOLUNTARIADO (
ID_VOLUNTARIADO
);

/*==============================================================*/
/* Table: VOLUNTARIO                                            */
/*==============================================================*/
create table VOLUNTARIO (
   ID_VOLUNTARIO        SERIAL not null,
   ID_EVENTO            INT4                 null,
   ID_VOLUNTARIADO      INT4                 null,
   ID_RNV               INT4                 null,
   NOMBRE_VOLUNTARIO    VARCHAR(20)          not null,
   constraint PK_VOLUNTARIO primary key (ID_VOLUNTARIO)
);

/*==============================================================*/
/* Index: VOLUNTARIO_PK                                         */
/*==============================================================*/
create unique index VOLUNTARIO_PK on VOLUNTARIO (
ID_VOLUNTARIO
);

/*==============================================================*/
/* Index: VOLUNTARIADO_TIENE_FK                                 */
/*==============================================================*/
create  index VOLUNTARIADO_TIENE_FK on VOLUNTARIO (
ID_VOLUNTARIADO
);

/*==============================================================*/
/* Index: PARTICIPAN_VOLUNTARIOS_FK                             */
/*==============================================================*/
create  index PARTICIPAN_VOLUNTARIOS_FK on VOLUNTARIO (
ID_EVENTO
);

alter table ACTIVIDAD
   add constraint FK_ACTIVIDA_REALIZA_EVENTO foreign key (ID_EVENTO)
      references EVENTO (ID_EVENTO)
      on delete restrict on update restrict;

alter table ACTIVIDAD
   add constraint FK_ACTIVIDA_REFERENCE_TIPO_ACT foreign key (ID_TIPO_ACTIVIDAD)
      references TIPO_ACTIVIDAD (ID_TIPO_ACTIVIDAD)
      on delete restrict on update restrict;

alter table CATASTROFE
   add constraint FK_CATASTRO_REFERENCE_TIPO_CAT foreign key (ID_TIPO_CATASTROFE)
      references TIPO_CATASTROFE (ID_TIPO_CATASTROFE)
      on delete restrict on update restrict;

alter table CATASTROFE
   add constraint FK_CATASTRO_REFERENCE_HISTORIA foreign key (ID_HISTORIAL)
      references HISTORIAL_CATASTROFE (ID_HISTORIAL)
      on delete restrict on update restrict;

alter table CENTRO_DE_ACOPIO
   add constraint FK_CENTRO_D_REFERENCE_MEDIDAS foreign key (ID_MEDIDAS)
      references MEDIDAS (ID_MEDIDAS)
      on delete restrict on update restrict;

alter table COMENTARIO
   add constraint FK_COMENTAR_REFERENCE_MEDIDAS foreign key (ID_MEDIDAS)
      references MEDIDAS (ID_MEDIDAS)
      on delete restrict on update restrict;

alter table COMENTARIO
   add constraint FK_COMENTAR_REFERENCE_USUARIO foreign key (EMAIL)
      references USUARIO (EMAIL)
      on delete restrict on update restrict;

alter table DONACION
   add constraint FK_DONACION_REFERENCE_MEDIDAS foreign key (ID_MEDIDAS)
      references MEDIDAS (ID_MEDIDAS)
      on delete restrict on update restrict;

alter table DONANTES
   add constraint FK_DONANTES_REFERENCE_DONACION foreign key (ID_DONACION)
      references DONACION (ID_DONACION)
      on delete restrict on update restrict;

alter table DONANTES
   add constraint FK_DONANTES_REFERENCE_USUARIO foreign key (EMAIL)
      references USUARIO (EMAIL)
      on delete restrict on update restrict;

alter table EVENTO
   add constraint FK_EVENTO_REFERENCE_MEDIDAS foreign key (ID_MEDIDAS)
      references MEDIDAS (ID_MEDIDAS)
      on delete restrict on update restrict;

alter table HISTORICAL_USER
   add constraint FK_HISTORIC_REFERENCE_HISTORIA foreign key (ID_HISTORIAL_USUARIO)
      references HISTORIAL_USUARIO (ID_HISTORIAL_USUARIO)
      on delete restrict on update restrict;

alter table HISTORICAL_USER
   add constraint FK_HISTORIC_REFERENCE_USUARIO foreign key (EMAIL)
      references USUARIO (EMAIL)
      on delete restrict on update restrict;

alter table INSUMO
   add constraint FK_INSUMO_REFERENCE_CENTRO_D foreign key (ID_ACOPIO)
      references CENTRO_DE_ACOPIO (ID_ACOPIO)
      on delete restrict on update restrict;

alter table INSUMO
   add constraint FK_INSUMO_REFERENCE_TIPO_INS foreign key (ID_TIPO_INSUMO)
      references TIPO_INSUMO (ID_TIPO_INSUMO)
      on delete restrict on update restrict;

alter table LUGAR
   add constraint FK_LUGAR_REFERENCE_CIUDAD foreign key (ID_CIUDAD)
      references CIUDAD (ID_CIUDAD)
      on delete restrict on update restrict;

alter table LUGAR
   add constraint FK_LUGAR_REFERENCE_COMUNA foreign key (ID_COMUNA)
      references COMUNA (ID_COMUNA)
      on delete restrict on update restrict;

alter table LUGAR
   add constraint FK_LUGAR_REFERENCE_REGION foreign key (ID_REGION)
      references REGION (ID_REGION)
      on delete restrict on update restrict;

alter table LUGAR_CATASTROFE
   add constraint FK_LUGAR_CA_REFERENCE_CATASTRO foreign key (ID_CATASTROFE)
      references CATASTROFE (ID_CATASTROFE)
      on delete restrict on update restrict;

alter table LUGAR_CATASTROFE
   add constraint FK_LUGAR_CA_REFERENCE_LUGAR foreign key (ID_LUGAR)
      references LUGAR (ID_LUGAR)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_ASIGNA_CATASTRO foreign key (ID_CATASTROFE)
      references CATASTROFE (ID_CATASTROFE)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_CREA_ORGANIZA foreign key (ID_ORGANIZACION)
      references ORGANIZACION (ID_ORGANIZACION)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_REFERENCE_USUARIO foreign key (EMAIL)
      references USUARIO (EMAIL)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_REFERENCE_HISTORIA foreign key (ID_HISTORIAL)
      references HISTORIAL_MEDIDAS (ID_HISTORIAL)
      on delete restrict on update restrict;

alter table ORGANIZACION
   add constraint FK_ORGANIZA_REFERENCE_TIPO_BEN foreign key (ID_TIPO_BENEFICIENCIA)
      references TIPO_BENEFICIENCIA (ID_TIPO_BENEFICIENCIA)
      on delete restrict on update restrict;

alter table RNV
   add constraint FK_RNV_ES_PARTE_USUARIO foreign key (EMAIL)
      references USUARIO (EMAIL)
      on delete restrict on update restrict;

alter table TRABAJO
   add constraint FK_TRABAJO_REFERENCE_TIPO_TRA foreign key (ID_TIPO_TRABAJO)
      references TIPO_TRABAJO (ID_TIPO_TRABAJO)
      on delete restrict on update restrict;

alter table TRABAJO
   add constraint FK_TRABAJO_REFERENCE_RNV foreign key (ID_RNV)
      references RNV (ID_RNV)
      on delete restrict on update restrict;

alter table USUARIO
   add constraint FK_USUARIO_TIENE_TIPO_USU foreign key (ID_TIPO)
      references TIPO_USUARIO (ID_TIPO)
      on delete restrict on update restrict;

alter table VOLUNTARIADO
   add constraint FK_VOLUNTAR_REFERENCE_MEDIDAS foreign key (ID_MEDIDAS)
      references MEDIDAS (ID_MEDIDAS)
      on delete restrict on update restrict;

alter table VOLUNTARIO
   add constraint FK_VOLUNTAR_PARTICIPA_EVENTO foreign key (ID_EVENTO)
      references EVENTO (ID_EVENTO)
      on delete restrict on update restrict;

alter table VOLUNTARIO
   add constraint FK_VOLUNTAR_VOLUNTARI_VOLUNTAR foreign key (ID_VOLUNTARIADO)
      references VOLUNTARIADO (ID_VOLUNTARIADO)
      on delete restrict on update restrict;

alter table VOLUNTARIO
   add constraint FK_VOLUNTAR_REFERENCE_RNV foreign key (ID_RNV)
      references RNV (ID_RNV)
      on delete restrict on update restrict;

