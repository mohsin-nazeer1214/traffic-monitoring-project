<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Visit;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function trackVisit($externalId)
    {
        $user = User::firstOrCreate(['external_id' => $externalId]);

        $visit = Visit::firstOrCreate(['user_id' => $user->id]);

        Log::info('User ID: ' . $user->id . ', Visit ID: ' . $visit->id);

        return response()->json([
            'user_id' => $user->id,
            'visit_id' => $visit->id,
            'message' => 'Visit tracked successfully.'
        ], 200);
    }
    public function updateStage(Request $request)
    {
        
        $validatedData = $request->validate([
            'externalId' => 'required|string',
            'stage' => 'required|string|in:visited,viewed_page,searched', 
        ]);

        $user = User::where('external_id', $validatedData['externalId'])->firstOrFail();
    
        Stage::updateOrCreate(
            ['user_id' => $user->id],
            ['stage' => $validatedData['stage']]
        );

        Log::info('User ID: ' . $user->id . ' updated stage to: ' . $validatedData['stage']);

        return response()->json([
            'user_id' => $user->id,
            'stage' => $validatedData['stage'],
            'message' => 'User stage updated successfully.'
        ], 200);
    }

}
