<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'LeBron James',
            'jersey no' => 'NO.23',
            'position' => 'striker',
            'gender' => 'man',
            'height'=>'2.03m',
            'weight' => '100kg',
           'nationality' => 'USA',   
            'image' => '1.jpg',
        ],
          '2' => [
            'id' => 2,
            'name' => 'Anthony Davis',
            'jersey no' => 'NO.3',
            'position' => 'striker',
            'gender' => 'man',
             'height'=>'2.11m',
            'weight' => '103kg',
           'nationality' => 'USA',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Dwight Howard',
            'jersey no' => 'NO.39',
            'position' => 'center',
            'gender' => 'man',
             'height'=>'2.11m',
            'weight' => '101kg',
           'nationality' => 'USA',
            'image' => '3.jpg',
        ],
       '4' => [
            'id' => 4,
            'name' => 'Javale Mcgee',
            'jersey no' => 'NO.7',
            'position' => 'center',
            'gender' => 'man',
            'height'=>'2.13m',
            'weight' => '105kg',
           'nationality' => 'USA',
            'image' => '4.jpg',
        ],
       '5' => [
            'id' => 5,
            'name' => 'Kyle Kuzma',
            'jersey no' => 'NO.0',
            'position' => 'striker',
            'gender' => 'man',
            'height'=>'2.06m',
            'weight' => '110kg',
           'nationality' => 'USA',
            'image' => '5.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Rajon Rondo',
            'jersey no' => 'NO.9',
            'position' => 'point guard',
            'gender' => 'man',
             'height'=>'1.85m',
            'weight' => '95kg',
           'nationality' => 'USA',
            'image' => '6.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}