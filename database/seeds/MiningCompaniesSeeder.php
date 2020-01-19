<?php

use Illuminate\Database\Seeder;
use App\MiningCompany;

class MiningCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $companies = [
          [
              'name' => 'IAM GOLD ESSAKANE SA',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00016079 H',
              'region_id' => 3
          ],
          [
              'name' => 'SEMAFO BURKINA FASO',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00009763 S',
              'region_id' => 1
          ],
          [
              'name' => 'SOCIETE DES MINES DE BELAHOURO (SMB)',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00011610 K',
              'region_id' => 6
          ],
          [
              'name' => 'SOCIETE DES MINES DE TAPARKO (SOMITA)',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00007047 V',
              'region_id' => 3
          ],
          [
              'name' => 'BIRIMIAN RESOURCES',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00029551 F',
              'region_id' => 10
          ],
          [
              'name' => 'BURKINA MINING COMPANY (BMC)',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00006204 X',
              'region_id' => 7
          ],
          [
              'name' => 'GRYPHON SA (*)',
              'description' => 'Just a simple test description.',
              'ifu_number' => 'NC',
              'region_id' => 9
          ],
          [
              'name' => 'BISSA GOLD',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00030276 N',
              'region_id' => 11
          ],
          [
              'name' => 'NANTOU MINING SA',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00010790 T',
              'region_id' => 6
          ],
          [
              'name' => 'OREZONE INC SARL',
              'description' => 'Just a simple test description.',
              'ifu_number' => '00007345 N',
              'region_id' => 1
          ],
      ];
      foreach ($companies as $company) {
          MiningCompany::create([
            'name' => $company['name'],
            'description' => $company['description'],
            'ifu_number' => $company['ifu_number'],
            'region_id' => $company['region_id']
          ]);
      }
    }
}
