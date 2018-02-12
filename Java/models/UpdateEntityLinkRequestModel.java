/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The model for PUT EntityLink input parameters.
 */
public class UpdateEntityLinkRequestModel {
    /**
     * Gets or sets the name of the virtual.
     */
    @JsonProperty(value = "VirtualName")
    private String virtualName;

    /**
     * Gets or sets the class.
     */
    @JsonProperty(value = "Class")
    private Integer classProperty;

    /**
     * Gets or sets the name.
     */
    @JsonProperty(value = "Name")
    private String name;

    /**
     * Gets or sets the acl.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Gets or sets the page number.
     */
    @JsonProperty(value = "PageNumber")
    private Integer pageNumber;

    /**
     * Gets or sets the state. Possible values include: 'Undefined',
     * 'MaxStates', 'Reserved', 'UserDefined', 'Dynamic', 'Static', 'New',
     * 'CheckedOut', 'Internal', 'Statres5', 'Linked', 'Statres4', 'Statres3',
     * 'Statres2', 'Statres1', 'Locked', 'OnServerCache', 'OnClientCache',
     * 'Fetching', 'Dynres4', 'Dynres3', 'Dynres2', 'Dynres1', 'User1',
     * 'User2', 'User3', 'User4', 'User5', 'User6', 'User7', 'User8', 'User9',
     * 'User10', 'User11', 'User12', 'User13', 'User14', 'User15', 'User16'.
     */
    @JsonProperty(value = "State")
    private String state;

    /**
     * Gets or sets the note.
     */
    @JsonProperty(value = "Note")
    private String note;

    /**
     * Get the virtualName value.
     *
     * @return the virtualName value
     */
    public String virtualName() {
        return this.virtualName;
    }

    /**
     * Set the virtualName value.
     *
     * @param virtualName the virtualName value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withVirtualName(String virtualName) {
        this.virtualName = virtualName;
        return this;
    }

    /**
     * Get the classProperty value.
     *
     * @return the classProperty value
     */
    public Integer classProperty() {
        return this.classProperty;
    }

    /**
     * Set the classProperty value.
     *
     * @param classProperty the classProperty value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withClassProperty(Integer classProperty) {
        this.classProperty = classProperty;
        return this;
    }

    /**
     * Get the name value.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set the name value.
     *
     * @param name the name value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withName(String name) {
        this.name = name;
        return this;
    }

    /**
     * Get the acl value.
     *
     * @return the acl value
     */
    public Integer acl() {
        return this.acl;
    }

    /**
     * Set the acl value.
     *
     * @param acl the acl value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

    /**
     * Get the pageNumber value.
     *
     * @return the pageNumber value
     */
    public Integer pageNumber() {
        return this.pageNumber;
    }

    /**
     * Set the pageNumber value.
     *
     * @param pageNumber the pageNumber value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withPageNumber(Integer pageNumber) {
        this.pageNumber = pageNumber;
        return this;
    }

    /**
     * Get the state value.
     *
     * @return the state value
     */
    public String state() {
        return this.state;
    }

    /**
     * Set the state value.
     *
     * @param state the state value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withState(String state) {
        this.state = state;
        return this;
    }

    /**
     * Get the note value.
     *
     * @return the note value
     */
    public String note() {
        return this.note;
    }

    /**
     * Set the note value.
     *
     * @param note the note value to set
     * @return the UpdateEntityLinkRequestModel object itself.
     */
    public UpdateEntityLinkRequestModel withNote(String note) {
        this.note = note;
        return this;
    }

}
