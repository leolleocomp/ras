<?php
namespace br\gov\saude\esusab\ras\atendindividual;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class ProblemaCondicaoAvaliacaoAIThrift {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $ciaps = null;
  /**
   * @var string
   */
  public $outroCiap1 = null;
  /**
   * @var string
   */
  public $outroCiap2 = null;
  /**
   * @var string
   */
  public $cid10 = null;
  /**
   * @var string
   */
  public $cid10_2 = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'ciaps',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        2 => array(
          'var' => 'outroCiap1',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'outroCiap2',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'cid10',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'cid10_2',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['ciaps'])) {
        $this->ciaps = $vals['ciaps'];
      }
      if (isset($vals['outroCiap1'])) {
        $this->outroCiap1 = $vals['outroCiap1'];
      }
      if (isset($vals['outroCiap2'])) {
        $this->outroCiap2 = $vals['outroCiap2'];
      }
      if (isset($vals['cid10'])) {
        $this->cid10 = $vals['cid10'];
      }
      if (isset($vals['cid10_2'])) {
        $this->cid10_2 = $vals['cid10_2'];
      }
    }
  }

  public function getName() {
    return 'ProblemaCondicaoAvaliacaoAIThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::LST) {
            $this->ciaps = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readListBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $elem12 = null;
              $xfer += $input->readString($elem12);
              $this->ciaps []= $elem12;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->outroCiap1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->outroCiap2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cid10);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cid10_2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ProblemaCondicaoAvaliacaoAIThrift');
    if ($this->ciaps !== null) {
      if (!is_array($this->ciaps)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('ciaps', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->ciaps));
        {
          foreach ($this->ciaps as $iter13)
          {
            $xfer += $output->writeString($iter13);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->outroCiap1 !== null) {
      $xfer += $output->writeFieldBegin('outroCiap1', TType::STRING, 2);
      $xfer += $output->writeString($this->outroCiap1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->outroCiap2 !== null) {
      $xfer += $output->writeFieldBegin('outroCiap2', TType::STRING, 3);
      $xfer += $output->writeString($this->outroCiap2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cid10 !== null) {
      $xfer += $output->writeFieldBegin('cid10', TType::STRING, 4);
      $xfer += $output->writeString($this->cid10);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cid10_2 !== null) {
      $xfer += $output->writeFieldBegin('cid10_2', TType::STRING, 5);
      $xfer += $output->writeString($this->cid10_2);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}
