<?php
/* Licitacao Fixture generated on: 2011-09-24 22:20:54 : 1316895654 */
class LicitacaoFixture extends CakeTestFixture {
	var $name = 'Licitacao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cl' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'num_edital' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indice' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'local' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'objeto' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'historico' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dt_abertura' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'modalidade_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'tipolicitacao_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'regime' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'vlr_lic' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'contratante_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'num_edital' => array('column' => array('num_edital', 'indice'), 'unique' => 0), 'modalidade_id' => array('column' => 'modalidade_id', 'unique' => 0), 'modified_by' => array('column' => 'modified_by', 'unique' => 0), 'tipolicitacao_id' => array('column' => 'tipolicitacao_id', 'unique' => 0), 'contrato_id' => array('column' => 'contratante_id', 'unique' => 0), 'usuario_id' => array('column' => 'usuario_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 1,
			'tipolicitacao_id' => 1,
			'regime' => 'Lorem ip',
			'usuario_id' => 1,
			'vlr_lic' => 1,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 1,
			'contratante_id' => 1
		),
		array(
			'id' => 2,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 2,
			'tipolicitacao_id' => 2,
			'regime' => 'Lorem ip',
			'usuario_id' => 2,
			'vlr_lic' => 2,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 2,
			'contratante_id' => 2
		),
		array(
			'id' => 3,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 3,
			'tipolicitacao_id' => 3,
			'regime' => 'Lorem ip',
			'usuario_id' => 3,
			'vlr_lic' => 3,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 3,
			'contratante_id' => 3
		),
		array(
			'id' => 4,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 4,
			'tipolicitacao_id' => 4,
			'regime' => 'Lorem ip',
			'usuario_id' => 4,
			'vlr_lic' => 4,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 4,
			'contratante_id' => 4
		),
		array(
			'id' => 5,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 5,
			'tipolicitacao_id' => 5,
			'regime' => 'Lorem ip',
			'usuario_id' => 5,
			'vlr_lic' => 5,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 5,
			'contratante_id' => 5
		),
		array(
			'id' => 6,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 6,
			'tipolicitacao_id' => 6,
			'regime' => 'Lorem ip',
			'usuario_id' => 6,
			'vlr_lic' => 6,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 6,
			'contratante_id' => 6
		),
		array(
			'id' => 7,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 7,
			'tipolicitacao_id' => 7,
			'regime' => 'Lorem ip',
			'usuario_id' => 7,
			'vlr_lic' => 7,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 7,
			'contratante_id' => 7
		),
		array(
			'id' => 8,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 8,
			'tipolicitacao_id' => 8,
			'regime' => 'Lorem ip',
			'usuario_id' => 8,
			'vlr_lic' => 8,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 8,
			'contratante_id' => 8
		),
		array(
			'id' => 9,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 9,
			'tipolicitacao_id' => 9,
			'regime' => 'Lorem ip',
			'usuario_id' => 9,
			'vlr_lic' => 9,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 9,
			'contratante_id' => 9
		),
		array(
			'id' => 10,
			'status' => 'Lorem ipsu',
			'cl' => 'Lorem ipsum dolor sit amet',
			'num_edital' => 'Lorem ip',
			'indice' => 'Lorem ip',
			'local' => 'Lorem ipsum dolor sit amet',
			'objeto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'historico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dt_abertura' => '2011-09-24',
			'modalidade_id' => 10,
			'tipolicitacao_id' => 10,
			'regime' => 'Lorem ip',
			'usuario_id' => 10,
			'vlr_lic' => 10,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 10,
			'contratante_id' => 10
		),
	);
}
