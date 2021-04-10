<?php

namespace App\Http\Controllers\Api;

use App\Models\Questionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuestionnaireController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth']);
    }

    /**
     * Get list of questionnaires
     */
    public function index()
    {
        $list = Questionnaire::where('status', 'new')
            ->paginate();

        Log::debug('Get questionnare: ' . print_r($list, true));

        return response()->json([
            'status' => 'ok',
            'data' => $list,
        ]);
    }

    /**
     * Get a specific questionnare by id
     *
     * @param string $id
     */
    public function get(string $id)
    {
        $questionnare = Questionnaire::findOrFail($id);

        return response()->json([
            'status' => 'ok',
            'data' => $questionnare->toArray(),
        ]);
    }

    /**
     * Process a specified questionnare
     *
     * @param \Illuminate\Http\Request $request
     * @param string $id to process
     */
    public function process(Request $request, string $id)
    {
        $validated = $this->validate($request, [
            'action' => 'required|in:accepted,rejected',
        ]);

        Log::debug("process $id: " . print_r($validated, true));

        $questionnare = Questionnaire::findOrFail($id);

        $questionnare->status = $validated['action'];
        $questionnare->save();

        return response()->json([
            'status' => 'ok',
            'message' => "Questionnare $id was " . $validated['action'] . ' successfully.',
        ]);
    }

    /**
     * Delete a specified questionnare
     */
    public function delete(string $id)
    {
        $questionnare = Questionnaire::findOrFail($id);

        $result = $questionnare->delete();

        return response()->json([
            'status' => $result ? 'ok' : 'error',
        ]);
    }
}
