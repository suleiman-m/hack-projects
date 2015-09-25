package co.suleiman.omgandroid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.Toast;

public class ChatroomActivity extends AppCompatActivity {

    private ListView mList;
    private String mRoomName;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chatroom);

        mList = (ListView) findViewById(R.id.messages);
        mRoomName = getIntent().getStringExtra("text");
    }

    private static class MessagesAdapter extends ArrayAdapter<String> {
        private final ArrayList<String> mData;
        private final LayoutInflater mInflater;

        public MessagesAdapter(Context context, int resource) {
            super(context, resource);

            mContext = context;
            mData = new ArrayList<>();
            mInflater = LayoutInflater.from(context);

        }
        public View getView(int position, View convertView, ViewGroup parent) {
            String message = mData.get(postition){
            if (convertView == null) {
                convertView = new TextView(mcontext);
            }
            
        public int getCount() {
            return mData.size();
        }
        public void addMessage(String message) {
            mData.add(message)
        }notifyDataSetChanged();
    }
}