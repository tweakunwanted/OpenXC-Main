<?php
/*Rev:26.09.18r0*/

class D3306b41F5d6529552c29749c22A8518
{
    private $binaryFormatMajorVersion;
    private $binaryFormatMinorVersion;
    private $buildEpoch;
    private $databaseType;
    private $description;
    private $ipVersion;
    private $languages;
    private $nodeByteSize;
    private $nodeCount;
    private $recordSize;
    private $searchTreeSize;
    public function __construct($C3d6f1ebee4e4c14f05fefdd435fa7bc)
    {
        $this->binaryFormatMajorVersion = $C3d6f1ebee4e4c14f05fefdd435fa7bc['binary_format_major_version'];
        $this->binaryFormatMinorVersion = $C3d6f1ebee4e4c14f05fefdd435fa7bc['binary_format_minor_version'];
        $this->buildEpoch = $C3d6f1ebee4e4c14f05fefdd435fa7bc['build_epoch'];
        $this->databaseType = $C3d6f1ebee4e4c14f05fefdd435fa7bc['database_type'];
        $this->languages = $C3d6f1ebee4e4c14f05fefdd435fa7bc['languages'];
        $this->description = $C3d6f1ebee4e4c14f05fefdd435fa7bc['description'];
        $this->ipVersion = $C3d6f1ebee4e4c14f05fefdd435fa7bc['ip_version'];
        $this->nodeCount = $C3d6f1ebee4e4c14f05fefdd435fa7bc['node_count'];
        $this->recordSize = $C3d6f1ebee4e4c14f05fefdd435fa7bc['record_size'];
        $this->nodeByteSize = $this->recordSize / 4;
        $this->searchTreeSize = $this->nodeCount * $this->nodeByteSize;
    }
    public function __get($F5f3a580a9ae07cbf9fc4d8e0ca49a07)
    {
        return $this->{$F5f3a580a9ae07cbf9fc4d8e0ca49a07};
    }
}
