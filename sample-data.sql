-- Datos de ejemplo para desarrollo - NO contiene información real

-- Datos básicos de catálogos
INSERT INTO `estratos` (`estr_id`, `estr_nombre`) VALUES
(1, 'Estrato 1'),
(2, 'Estrato 2'),
(3, 'Estrato 3'),
(4, 'Estrato 4'),
(5, 'Estrato 5'),
(6, 'Estrato 6');

INSERT INTO `generos` (`gen_id`, `gen_nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Otro');

INSERT INTO `roles` (`rol_id`, `rol_nombre`) VALUES
(1, 'Administrador'),
(2, 'Optómetra'),
(3, 'Asistente');

INSERT INTO `hobbies` (`hob_id`, `hob_nombre`) VALUES
(1, 'Lectura'),
(2, 'Deportes'),
(3, 'Música'),
(4, 'Cocina'),
(5, 'Viajes'),
(6, 'Cine');

-- Usuarios de prueba (contraseñas hasheadas)
INSERT INTO `usuarios` (`usu_id`, `usu_docum`, `usu_clave`, `rol_id`, `usu_nombre`) VALUES
(1, 12345678, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'Admin Test'),
(2, 87654321, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, 'Dr. Ejemplo'),
(3, 11223344, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 3, 'Asistente Test');

-- Pacientes de ejemplo (datos ficticios)
INSERT INTO `paciente` (`pac_id`, `pac_nombre`, `pac_apellido`, `pac_direccion`, `pac_telefono`, `pac_correo`, `gen_id`, `estr_id`) VALUES
(12345678, 'Juan', 'Pérez', 'Calle Ejemplo 123', 3001234567, 'juan.ejemplo@email.com', 1, 2),
(87654321, 'María', 'González', 'Carrera Test 456', 3007654321, 'maria.test@email.com', 2, 3),
(11223344, 'Pedro', 'Rodríguez', 'Avenida Demo 789', 3001122334, 'pedro.demo@email.com', 1, 1);

-- Relación pacientes-hobbies
INSERT INTO `paciente_hobbies` (`pac_hob_id`, `pac_id`, `hob_id`) VALUES
(1, 12345678, 1),
(2, 12345678, 3),
(3, 87654321, 2),
(4, 87654321, 5),
(5, 11223344, 4),
(6, 11223344, 6);

-- Historias clínicas de ejemplo
INSERT INTO `historias` (`hist_id`, `hist_motv`, `hist_esfod`, `hist_cilod`, `hist_ejeod`, `hist_esfoi`, `hist_ciloi`, `hist_ejeoi`, `hist_diaod`, `hist_diaoi`, `hist_recom`, `pac_id`) VALUES
(1, 'Control rutinario anual', '0.00', '0.00', '0', '0.00', '0.00', '0', 'Normal', 'Normal', 'Continuar controles anuales', 12345678),
(2, 'Revisión por fatiga visual', '-1.25', '-0.50', '90', '-1.00', '-0.25', '85', 'Miopía leve', 'Miopía leve', 'Uso de lentes correctivos', 87654321),
(3, 'Consulta por dificultad lectura', '+0.75', '0.00', '0', '+1.00', '0.00', '0', 'Hipermetropía', 'Hipermetropía', 'Lentes para lectura', 11223344);